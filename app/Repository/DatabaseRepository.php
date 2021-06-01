<?php

namespace App\Repository;

use App\Util\Database\SQLiteClient;

class DatabaseRepository implements RepositoryInterface {

	private $databaseClient;

	public function __construct(SQLiteClient $databaseClient) {
		$this->databaseClient = $databaseClient;
	}

	public function read(string $query, array $args = []): ReadResponse {
		$statement = $this->databaseClient->runQuery($query, $args);

		return new ReadResponse($statement->getAllRows());
	}
}