<?php

namespace App\Util;

use Exception;

class Helper {
	public static function getNiceDateTime(int $timestamp): string {
		$date =  date('Y-m-d', $timestamp);
		if ($date) {
			return $date;
		} else {
			throw new Exception('Incorrect timestamp provided: ' . $timestamp);
		}
	}

	public static function getDurationInSeconds(string $dateTime): int {
		$timestamp = strtotime($dateTime);
		if ($timestamp) {
			return $timestamp;
		} else {
			throw new Exception('Incorrect datetime provided: ' . $dateTime);
		}
	}

}