<?php

require __DIR__ . '/../vendor/autoload.php';

use Client\ScoringClient;
use Scoring\Period;

$client = new ScoringClient("grpc-server:50051", ["credentials" => Grpc\ChannelCredentials::createInsecure()]);
$client->GetScoresByCategoriesForPeriod(new Period());
