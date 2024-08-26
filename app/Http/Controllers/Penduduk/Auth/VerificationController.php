<?php

namespace App\Http\Controllers\Penduduk\Auth;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VerificationController extends Controller
{
    public function verificationNotice()
    {
        return view('penduduk.auth.verify-email');
    }

    public function verificationVerify($id, $token)
    {
        $penduduk = Penduduk::findOrFail($id);

        if ($penduduk->email_verification_token != $token) {
            return abort(404);
        }

        $penduduk->update([
            'email_verification_token' => null,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('penduduk.home');
    }

    public function verificationSend(Request $request)
    {
        $penduduk = Penduduk::findOrFail(Auth::guard('penduduk')->user()->id);

        if (!$penduduk) {
            return abort(404);
        }

        $token = Str::random(64);

        $penduduk->update([
            'email_verification_token' => $token,
        ]);

        $verification_link = route('penduduk.verification.verify', ['id' => $penduduk->id, 'token' => $token]);

        Mail::send('penduduk.mail.verify-email', ['penduduk' => $penduduk, 'verification_link' => $verification_link], function ($message) use ($penduduk) {
            $message->from('sipdescjb@gmail.com', config('app.name'));
            $message->to($penduduk->email);
            $message->subject("Verifikasi Email");
        });

        return redirect()->back()->with('success', 'Link verifikasi email yang baru telah dikirim ke email Anda');
    }
}
