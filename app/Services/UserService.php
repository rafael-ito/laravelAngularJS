<?php

namespace CodeProject\Services;

use CodeProject\Repositories\UserRepository;

class UserService {
	/**
	 * @var UserRepository
	 */
	protected $repository;


	public function __construct(UserRepository $repository) {
		$this->repository = $repository;
	}
}