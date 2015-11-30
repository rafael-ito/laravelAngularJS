<?php

namespace CodeProject\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use CodeProject\Repositories\UserRepository;
use CodeProject\Entities\User;

class UserRepositoryEloquent extends BaseRepository implements UserRepository {
    public function model() {
        return User::class;
    }
}