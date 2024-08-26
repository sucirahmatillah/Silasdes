<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('user.auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('user.home'));
        }

        return back()->withErrors([
            'password' => 'Kredensial tidak cocok dengan data kami.',
        ])->onlyInput('email');
    }
}
