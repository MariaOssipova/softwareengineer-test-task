<?php

namespace App\DAO;

class ScoringDAO extends AbstractDAO {

	public function getScoresByCategoriesForPeriod() {
		$query = 'SELECT * FROM rating_categories';
		$response = $this->getRepository()->read($query);
		foreach ($response->getData() as $row) {
			?><pre><?=__FILE__?> on <?=__LINE__.PHP_EOL?>"<?print_r($row)?>"</pre><? //TODO: do not commit
		}
	}


}