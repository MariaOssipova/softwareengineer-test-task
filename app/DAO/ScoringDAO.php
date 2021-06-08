<?php

namespace App\DAO;

use App\Util\Helper;
use Scoring\DateScore;
use Scoring\ScoreByCategory;
use Scoring\ScoresByCategories;
use Scoring\CategoryScore;
use Scoring\Period;
use Scoring\Score;
use Scoring\ScoreByTicket;
use Scoring\ScoresByTickets;

class ScoringDAO extends AbstractDAO {

	private function getScoresByCategoriesForPeriodQuery(string $startDate, string $endDate): string {
		return '
			SELECT rc.name,
				SUM(r.rating) AS scoreSum,
				COUNT(r.rating) AS ratingsCount,
				rc.weight,
				DATE(r.created_at) AS created_at
			FROM ratings AS r
				 INNER JOIN rating_categories AS rc ON (rc.id = r.rating_category_id)
			WHERE DATE(r.created_at) BETWEEN "' . $startDate . '" AND "' . $endDate . '"
			GROUP BY r.rating_category_id, DATE(r.created_at)
		';
	}

	private function getScoresByTicketsForPeriodQuery(string $startDate, string $endDate): string {
		/*
		 * Query can be done without joining tickets table, but wanted to exclude "broken" rows if there are any
		 * because tables do not have any foreign keys.
		 *
		 * Formula:
		 * (5*252 + 4*124 + 3*40 + 2*29 + 1*33) / (252+124+40+29+33) * Weight * 20 (in order to get score in percents)
		 * Where: Rating <--> Rating count
		 * 5 star - 252
		 * 4 star - 124
		 * 3 star - 40
		 * 2 star - 29
		 * 1 star - 33
		 */
		return '
			SELECT score.ticket_id,
			   score.category_name,
			   ROUND(SUM(score.rating * score.scoreCount) / SUM(score.scoreCount) * score.weight * 20) AS score
			FROM (
				 SELECT r.ticket_id,
						rc.name AS category_name,
						rc.weight,
						r.rating_category_id,
						r.rating,
						COUNT(r.rating) AS scoreCount
				 FROM ratings AS r
					  INNER JOIN tickets AS t ON (t.id = r.ticket_id)
					  INNER JOIN rating_categories AS rc ON (rc.id = r.rating_category_id)
				 WHERE DATE(r.created_at) BETWEEN "' . $startDate . '" AND "' . $endDate . '"
				 GROUP BY r.ticket_id,
						  r.rating_category_id,
						  r.rating
			 ) AS score
			GROUP BY score.ticket_id,
				 score.rating_category_id';
	}

	private function getOverallScoreForPeriodQuery(string $startDate, string $endDate): string {
		return '
			SELECT ROUND(SUM(score.rating * score.scoreCount) / SUM(score.scoreCount) * score.weight * 20) AS score
			FROM (
					 SELECT r.ticket_id,
							rc.name AS category_name,
							rc.weight,
							r.rating_category_id,
							r.rating,
							COUNT(r.rating) AS scoreCount
					 FROM ratings AS r
						  INNER JOIN tickets AS t ON (t.id = r.ticket_id)
						  INNER JOIN rating_categories AS rc ON (rc.id = r.rating_category_id)
					 WHERE DATE(r.created_at) BETWEEN "' . $startDate . '" AND "' . $endDate . '"
					 GROUP BY r.ticket_id,
							  r.rating_category_id,
							  r.rating
			    ) AS score';
	}

	private function getOverallScoreChangeForPeriodRangeQuery(string $startDate, string $endDate): string {
		return '';
	}

	public function getScoresByCategoriesForPeriod(Period $period): ?ScoresByCategories {
		$startDate = Helper::getNiceDateTime($period->getStartDate()->getDate());
		$endDate = Helper::getNiceDateTime($period->getEndDate()->getDate());

		$query = $this->getScoresByCategoriesForPeriodQuery($startDate, $endDate);
		$response = $this->getRepository()->read($query);

		$categoriesValues = [];

		foreach ($response->getData() as $row) {
			$categoryName = $row['name'];
			$scoreSum = $row['scoreSum'];
			$ratings = $row['ratingsCount'];
			$weight = $row['weight'];
			$categoryValues = round($scoreSum / $ratings * $weight * 20) ?? 0;
			$date = $row['created_at'];

			$categoriesValues[$categoryName]['dates'] = [
				$date => $categoryValues,
			];
			$categoriesValues[$categoryName]['ratings'] = $ratings;
			$categoriesValues[$categoryName]['total'] += $categoryValues;
		}

		$scoresByCategories = [];

		foreach ($categoriesValues as $categoryName => $categoryValues) {
			$dateScores = [];

			foreach ($categoryValues['dates'] as $date => $score) {
				$dateScores[] = new DateScore([
					'Date' => Helper::getUnixTimestamp($date),
					'Score' => $score,
				]);
			}

			$categoryScore = new CategoryScore([
				'CategoryName' => $categoryName,
				'Score' => $categoryValues['total'],
			]);

			$scoresByCategories[] = new ScoreByCategory([
				'CategoryScore' => $categoryScore,
				'Ratings' => $categoryValues['ratings'],
				'DateScores' => $dateScores,
			]);
		}

		return new ScoresByCategories(['ScoresByCategories' => $scoresByCategories]);
	}

	public function getScoresByTicketsForPeriod(Period $period): ?ScoresByTickets {
		$startDate = Helper::getNiceDateTime($period->getStartDate()->getDate());
		$endDate = Helper::getNiceDateTime($period->getEndDate()->getDate());

		$query = $this->getScoresByTicketsForPeriodQuery($startDate, $endDate);
		$response = $this->getRepository()->read($query);

		$scoresByTickets = [];

		foreach ($response->getData() as $row) {
			$ticketId = $row['ticket_id'];

			if (empty($scoresByTickets[$ticketId])) {
				$scoresByTickets[$ticketId] = [
					'TicketId' => $ticketId,
					'CategoryScores' => [],
				];
			}

			$scoresByTickets[$ticketId]['CategoryScores'][] =
				new CategoryScore([
					'CategoryName' => $row['category_name'],
					'Score' => $row['score'],
				]);
		}

		foreach ($scoresByTickets as $key => $val) {
			$scoresByTickets[$key] = new ScoreByTicket($val);
		}

		return new ScoresByTickets(['ScoresByTickets' => $scoresByTickets]);
	}

	public function getOverallScoreForPeriod(Period $period): ?Score {
		$startDate = Helper::getNiceDateTime($period->getStartDate()->getDate());
		$endDate = Helper::getNiceDateTime($period->getEndDate()->getDate());

		$query = $this->getOverallScoreForPeriodQuery($startDate, $endDate);
		$response = $this->getRepository()->read($query);

		$percentage = 0;

		if ($response->getData()) {
			$data = current($response->getData());

			if ($data['score']) {
				$percentage = $data['score'];
			}
		}

		return new Score(['Score' => $percentage]);
	}

	public function getOverallScoreChangeForPeriodRange(Period $period): ?Score {
		$startDate = Helper::getNiceDateTime($period->getStartDate()->getDate());
		$endDate = Helper::getNiceDateTime($period->getEndDate()->getDate());
		$query = $this->getOverallScoreChangeForPeriodRangeQuery($startDate, $endDate);
		$response = $this->getRepository()->read($query);

		return new Score();
	}

}