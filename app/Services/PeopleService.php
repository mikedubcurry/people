<?php

namespace App\Services;

use App\Models\User;

class PeopleService {
    protected $model;
    public function __construct()
    {
        $this->model = User::class;
    }

    public function all()
    {
        return $this->model::all();
    }  
}