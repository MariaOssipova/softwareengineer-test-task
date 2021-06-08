<?php

namespace Client;

use App\Util\Helper;
use Scoring\CategoryScore;
use Scoring\DateScore;
use Scoring\Period;
use Scoring\Score;
use Scoring\ScoreByCategory;
use Scoring\ScoreByTicket;
use Scoring\ScoresByCategories;
use Scoring\ScoresByTickets;
use Scoring\ScoringServiceClient;
use Grpc;

class ScoringClient extends ScoringServiceClient {

	public function getScoresByCategoriesForPeriod(Period $argument, $metadata = [], $options = []): void {
		/** @var ScoresByCategories $response */
		[$response, $status] = parent::GetScoresByCategoriesForPeriod($argument, $metadata, $options)->wait();
		if ($status->code !== Grpc\STATUS_OK) {
			echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
			exit(1);
		}

		/** @var ScoreByCategory $score */
		foreach ($response->getScoresByCategories() as $score) {

			echo 'CategoryName: ' . $score->getCategoryScore()->getCategoryName();
			echo ' | Total score: ' . $score->getCategoryScore()->getScore();
			echo ' | Ratings: ' . $score->getRatings();

			$dateIterator = $score->getDateScores()->getIterator();
			do {
				/** @var DateScore $dateScore */
				$dateScore = $dateIterator->current();
				echo ' | Date: ' . Helper::getNiceDateTime($dateScore->getDate());
				echo ' | Score: ' . $dateScore->getScore() . '%';
				$dateIterator->next();
			} while ($dateIterator->valid());
			echo "\n";
		}
	}

	public function getScoresByTicketsForPeriod(Period $argument, $metadata = [], $options = []): void {
		/** @var ScoresByTickets $response */
		[$response, $status] = parent::GetScoresByTicketsForPeriod($argument, $metadata, $options)->wait();
		if ($status->code !== Grpc\STATUS_OK) {
			echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
			exit(1);
		}

		/** @var ScoreByTicket $scoreByTicket */
		foreach ($response->getScoresByTickets() as $scoreByTicket) {
			echo 'Ticket ID: ' . $scoreByTicket->getTicketId();
			$categoryScoresIterator = $scoreByTicket->getCategoryScores()->getIterator();
			do {
				/** @var CategoryScore $categoryScore */
				$categoryScore = $categoryScoresIterator->current();
				echo ' | Category name: ' . $categoryScore->getCategoryName();
				echo ', Score: ' . $categoryScore->getScore() . ' | ';
				$categoryScoresIterator->next();
			} while ($categoryScoresIterator->valid());
			echo "\n";
		}
	}

	public function getOverallScoreForPeriod(Period $argument, $metadata = [], $options = []): void {
		/** @var Score $response */
		[$response, $status] = parent::GetOverallScoreForPeriod($argument, $metadata, $options)->wait();
		if ($status->code !== Grpc\STATUS_OK) {
			echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
			exit(1);
		}

		echo 'Overall score: ' . $response->getScore();
	}

	public function getOverallScoreChangeForPeriodRange(Period $argument, $metadata = [], $options = []) {
		[$response, $status] = parent::GetOverallScoreChangeForPeriodRange($argument, $metadata, $options)->wait();
		if ($status->code !== Grpc\STATUS_OK) {
			echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
			exit(1);
		}
	}

}
