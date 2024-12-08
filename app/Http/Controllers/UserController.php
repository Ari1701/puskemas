<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function show()
{

    $users = Auth::user();

    return view('dashboard.profil.index', compact('users'));
}

}