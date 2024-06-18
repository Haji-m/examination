<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
