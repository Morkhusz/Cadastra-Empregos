<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(FormLoginRequest $request)
{
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back();
        }

        return redirect()->route('vagas');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('vagas');
    }
}
