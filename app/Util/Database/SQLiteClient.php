<?php

namespace App\Util\Database;

use PDO;

class SQLiteClient {

	private $pdoInstance;

	public function __construct(PDO $pdoInstance) {
		$this->pdoInstance = $pdoInstance;
	}

	public function getPDOInstance(): PDO {
		return $this->pdoInstance;
	}

	public function runQuery(string $query, array $args = []): DatabaseStatement {
		$PDO = $this->getPDOInstance();

		/** @var DatabaseStatement $statement */
		$statement = $PDO->prepare($query);
		$statement->execute($args);

		return $statement;
	}


}