<?php

namespace Client;

use CategoryWeights\CategoryWeightsServiceClient;
use CategoryWeights\Period;

class CategoryWeightsClient extends CategoryWeightsServiceClient {
  public function GetScoresByCategoriesForPeriod(Period $argument, $metadata = [], $options = []) {
    echo 'client';
  }
}
