<?php

namespace Client;

use Scoring\ScoringServiceClient;
use Scoring\Period;

class ScoringClient extends ScoringServiceClient {
	public function GetScoresByCategoriesForPeriod(Period $argument, $metadata = [], $options = []) {
		echo 'client';
	}
}
