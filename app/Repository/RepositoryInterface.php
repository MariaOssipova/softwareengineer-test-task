<?php

namespace App\Repository;

interface RepositoryInterface {

	public function read(string $query, array $args = []): ReadResponse;
}