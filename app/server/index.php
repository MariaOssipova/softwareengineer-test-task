<?php

use App\server\CategoryWeightsServer;
use Grpc\RpcServer;

require __DIR__ . '/../../vendor/autoload.php';

$server = new RpcServer([]);
$server->addHttp2Port('0.0.0.0:50051');
$server->handle(new CategoryWeightsServer());
$server->run();
