<?php

namespace App\DAO;

use App\Repository\RepositoryInterface;

abstract class AbstractDAO {

	private $repository;

	public function __construct(RepositoryInterface $repository) {
		$this->repository = $repository;
	}

	protected function getRepository(): RepositoryInterface {
		return $this->repository;
	}
}