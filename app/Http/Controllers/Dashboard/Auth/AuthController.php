<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function index()
    {
        return view('dashboard.auth.index');
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('tracks.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
