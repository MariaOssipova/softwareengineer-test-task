<?php

namespace Client;

use CategoryWeights\Period;

$client = new CategoryWeightsClient();
$client->GetScoresByCategoriesForPeriod(new Period());
