<?php

namespace App\Util\Database;

use PDO;

class SQLiteClient {

	private $PDO;

	public function getPDOInstance(): PDO {
		if (!isset($this->PDO)) {
			$this->PDO = PDOFactory::getPDOObject();
		}

		return $this->PDO;
	}

	public function runQuery(string $query, array $args = []): DatabaseStatement {
		$PDO = $this->getPDOInstance();
		$PDO->setAttribute(PDO::ATTR_STATEMENT_CLASS, [DatabaseStatement::class]);

		/** @var DatabaseStatement $statement */
		$statement = $PDO->prepare($query);
		$statement->execute($args);

		return $statement;
	}


}