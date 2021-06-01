<?php

namespace App\Util\Database;

use PDOStatement;

class DatabaseStatement extends PDOStatement {

	public function getAllRows(): array {
		return $this->fetchAll();
	}
}