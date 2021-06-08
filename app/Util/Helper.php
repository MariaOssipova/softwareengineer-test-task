<?php

namespace App\Util;

use Exception;

class Helper {
	public static function getNiceDateTime(int $unixTimestamp): string {
		$date =  date('Y-m-d', $unixTimestamp);

		if ($date) {
			return $date;
		} else {
			throw new Exception('Incorrect timestamp provided: ' . $unixTimestamp);
		}
	}

	public static function getUnixTimestamp(string $dateTime): int {
		$timestamp = strtotime($dateTime);
		if ($timestamp) {
			return $timestamp;
		} else {
			throw new Exception('Incorrect datetime provided: ' . $dateTime);
		}
	}

}