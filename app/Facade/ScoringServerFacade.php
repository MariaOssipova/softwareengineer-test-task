<?php

namespace App\Facade;

use App\DAO\ScoringDAO;
use App\Repository\DatabaseRepository;
use App\Util\Database\SQLiteClient;
use Scoring\ScoresByCategories;
use Scoring\ScoresByTickets;
use Scoring\ScoringServiceStub;
use Scoring\Period;
use Scoring\Score;
use Grpc\ServerContext;

class ScoringServerFacade extends ScoringServiceStub {

	private $scoringDAO;

	public static function getScoringServerFacade(): ScoringServerFacade {
		$settingsFacade = new ScoringServerFacade();
		$settingsFacade->setScoringDAO(new ScoringDAO(new DatabaseRepository(new SQLiteClient())));

		return $settingsFacade;
	}

	private function setScoringDAO(ScoringDAO $dao): void {
		$this->scoringDAO = $dao;
	}

	public function getScoringDAO(): ?ScoringDAO {
		return $this->scoringDAO;
	}

	public function GetScoresByCategoriesForPeriod(Period $request, ServerContext $context): ?ScoresByCategories {
		$DAO = $this->getScoringDAO();

		return $DAO->getScoresByCategoriesForPeriod($request);
	}

	public function GetScoresByTicketsForPeriod(Period $request, ServerContext $context): ?ScoresByTickets {
		$DAO = $this->getScoringDAO();

		return $DAO->getScoresByTicketsForPeriod($request);
	}

	public function GetOverallScoreForPeriod(Period $request, ServerContext $context): ?Score {
		$DAO = $this->getScoringDAO();

		return $DAO->getOverallScoreForPeriod($request);
	}

	public function GetOverallScoreChangeForPeriodRange(Period $request, ServerContext $context): ?Score {
		$DAO = $this->getScoringDAO();

		return $DAO->getOverallScoreChangeForPeriodRange($request);
	}
}
