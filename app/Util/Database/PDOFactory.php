<?php

namespace App\Util\Database;

use PDO;

class PDOFactory {

	public static function getPDOObject(): PDO {
		return new PDO("sqlite:" . self::getPathToSQLiteFile());
	}

	private static function getPathToSQLiteFile(): string {
		return '../Util/Database/database.db';
	}
}
