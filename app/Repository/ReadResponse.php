<?php

namespace App\Repository;

class ReadResponse {

	private $data;

	public function __construct(array $data) {
		$this->data = $data;
	}

	public function getData(): array {
		return $this->data;
	}

}