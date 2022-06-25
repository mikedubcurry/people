<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PeopleService;
use App\Models\User;

class PeopleController extends Controller
{
    public function __construct(protected PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }

    public function index()
    {
        return view('people', ['people' => $this->peopleService->all()]);
    }
}
