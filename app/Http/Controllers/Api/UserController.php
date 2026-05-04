<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // GET all users
    public function index()
    {
        return response()->json(User::all());
    }

    // POST create user
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }
}   