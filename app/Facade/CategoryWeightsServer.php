<?php

namespace App\Facade;

use CategoryWeights\Category;
use CategoryWeights\CategoryWeightsServiceStub;
use CategoryWeights\Period;
use Grpc\ServerContext;

class CategoryWeightsServer extends CategoryWeightsServiceStub {

  public function GetScoresByCategoriesForPeriod(
    Period $request,
    ServerContext $context
  ): ?Category {
    echo "I work!";

    return null;
  }
}
