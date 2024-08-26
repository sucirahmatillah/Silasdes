<?php

namespace App\Http\Controllers\Penduduk\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\Auth\RegisterRequest;
use App\Models\Penduduk;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        return view('user.auth.register');
    }

    public function registration(RegisterRequest $request)
    {
        $token = Str::random(64);

        $user = user::where('email', $request->email)->updateOrCreate([
            'email' => $request->email,
        ], [
            'nama' => ucwords($request->nama),
            'email' => strtolower($request->email),
            'email_verification_token' => $token,
            'password' => bcrypt($request->password),
        ]);

        $verification_link = route('user.verification.verify', ['id' => $penduduk->id, 'token' => $token]);

        Mail::send('user.mail.verify-email', ['penduduk' => $penduduk, 'verification_link' => $verification_link], function ($message) use ($request) {
            $message->from('sipedescjb@gmail.com', config('app.name'));
            $message->to($request->email);
            $message->subject("Verifikasi Email");
        });

        Auth::guard('user')->login($penduduk);

        return redirect()->route('user.home');
    }
}
