<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(UserRepository $userRepo)
{
    $users = $userRepo->all();
    return Inertia::render('Users', [
        'users' => $users,
    ]);
}
}
