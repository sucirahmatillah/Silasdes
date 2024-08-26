<?php

namespace App\Http\Controllers\Penduduk\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('penduduk.auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::guard('penduduk')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('penduduk.home'));
        }

        return back()->withErrors([
            'password' => 'Kredensial tidak cocok dengan data kami.',
        ])->onlyInput('email');
    }
}
