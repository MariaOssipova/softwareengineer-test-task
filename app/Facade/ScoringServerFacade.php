<?php

namespace App\Facade;

use App\DAO\ScoringDAO;
use App\Repository\DatabaseRepository;
use App\Util\Database\SQLiteClient;
use Scoring\Category;
use Scoring\ScoringServiceStub;
use Scoring\Period;
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

	public function GetScoresByCategoriesForPeriod(Period $request, ServerContext $context): ?Category {
		$DAO = $this->getScoringDAO();

		$DAO->getScoresByCategoriesForPeriod();

		return null;
	}
}
