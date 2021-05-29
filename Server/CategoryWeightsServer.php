<?php

namespace Server;

use CategoryWeights\Category;
use CategoryWeights\CategoryWeightsServiceStub;
use CategoryWeights\Period;
use Grpc\RpcServer;
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

$server = new RpcServer();
$server->addHttp2Port('0.0.0.0:50051');
$server->handle(new CategoryWeightsServer());
$server->run();
