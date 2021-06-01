<?php

require __DIR__ . '/../vendor/autoload.php';

use Client\ScoringClient;
use Grpc\ChannelCredentials;
use Scoring\Period;
use Scoring\Date;
use App\Util\Helper;

$client = new ScoringClient("localhost:50051", ["credentials" => ChannelCredentials::createInsecure()]);
$client->getScoresByTicketsForPeriod(new Period([
	'StartDate' => new Date(['Date' => Helper::getTimestamp('2019-02-24')]),
	'EndDate' => new Date(['Date' => Helper::getTimestamp('2019-02-25')]),
]));
$client->getOverallScoreForPeriod(new Period([
	'StartDate' => new Date(['Date' => Helper::getTimestamp('2019-02-24')]),
	'EndDate' => new Date(['Date' => Helper::getTimestamp('2019-02-25')]),
]));
$client->getScoresByCategoriesForPeriod(new Period([
	'StartDate' => new Date(['Date' => Helper::getTimestamp('2019-02-24')]),
	'EndDate' => new Date(['Date' => Helper::getTimestamp('2019-02-25')]),
]));