<?php

namespace Client;

use CategoryWeights\CategoryWeightsServiceClient;
use CategoryWeights\Period;

class ScoringClient extends CategoryWeightsServiceClient {
	public function GetScoresByCategoriesForPeriod(Period $argument, $metadata = [], $options = []) {
		echo 'client';
	}
}
