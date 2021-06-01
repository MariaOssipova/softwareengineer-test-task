<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Facade\ScoringServerFacade;
use Grpc\RpcServer;

$server = new RpcServer([]);
$server->addHttp2Port('0.0.0.0:50051');
$server->handle(ScoringServerFacade::getScoringServerFacade());
$server->run();