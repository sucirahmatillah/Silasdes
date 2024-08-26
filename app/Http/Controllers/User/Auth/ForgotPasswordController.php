<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\ForgotPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function passwordRequest()
    {
        return view('user.auth.forgot-password');
    }

    public function passwordEmail(ForgotPasswordRequest $request)
    {
        $token = Str::random(64);

        DB::table('password_resets')->where('email', $request->email)->limit(1)->updateOrInsert(['email' => $request->email], [
            'email' => strtolower($request->email),
            'token' => $token,
            'created_at' => now(),
        ]);

        $reset_link = route('user.password.reset', ['token' => $token]);

        Mail::send('user.mail.forgot-password', ['token' => $token, 'reset_link' => $reset_link], function ($message) use ($request) {
            $message->from('noreply@bubblewo.com', config('app.name'));
            $message->to($request->email);
            $message->subject('Pengaturan Ulang Kata Sandi/Password');
        });

        return redirect()->back()->with('success', 'Kami telah mengirimkan link pengaturan ulang kata sandi melalui email Anda');
    }
}
