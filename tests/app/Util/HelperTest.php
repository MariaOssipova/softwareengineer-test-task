<?php

namespace App\Util;

use App\BaseTest;

class HelperTest extends BaseTest {

	public function testGetNiceDateTime() {
		self::assertEquals('2021-06-07', Helper::getNiceDateTime(1623099600));
	}

	public function testGetUnixTimestamp() {
		self::assertEquals(1623130467, Helper::getUnixTimestamp('2021-06-08 05:34:27'));
	}
}