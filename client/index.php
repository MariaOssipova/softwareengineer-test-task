<?php

namespace Client;

use CategoryWeights\Period;
use Grpc;

$client = new ScoringClient("grpc-server:50051",
	[
		"credentials" => Grpc\ChannelCredentials::createInsecure(),
	]);
$client->GetScoresByCategoriesForPeriod(new Period());
