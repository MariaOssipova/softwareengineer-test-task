<?php

require __DIR__ . '/../../vendor/autoload.php';

/*use App\server\ScoringServerFacade;
use Grpc\RpcServer;

$server = new RpcServer([]);
$server->addHttp2Port('0.0.0.0:50051');
$server->handle(new ScoringServerFacade());
$server->run();
*/

use App\Facade\ScoringServerFacade;

$facade = ScoringServerFacade::getScoringServerFacade();
$facade->GetScoresByCategoriesForPeriod(new \CategoryWeights\Period(), new \Grpc\ServerContext(null));