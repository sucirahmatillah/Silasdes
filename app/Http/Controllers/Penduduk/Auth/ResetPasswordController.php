<?php

namespace App\Http\Controllers\Penduduk\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\Auth\ResetPasswordRequest;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function passwordReset($token)
    {
        $password_reset = DB::table('password_resets')->select('email', 'token')->where('token', $token)->first();

        if (!$password_reset) {
            return abort('404');
        }

        return view('penduduk.auth.reset-password', compact('password_reset'));
    }

    public function passwordUpdate(ResetPasswordRequest $request)
    {
        $password_reset = DB::table('password_resets')->where('token', $request->token)->where('email', $request->email)->first();

        if (!$password_reset) {
            return redirect()->back()->withErrors([
                'email' => 'Email yang Anda masukkan tidak valid dengan token reset password',
            ])->withInput();
        }

        $penduduk = Penduduk::where('email', $request->email)->first();
        if (!$penduduk) {
            return abort(404);
        }
        $penduduk->update([
            'password' => bcrypt($request->password),
        ]);

        DB::table('password_resets')->where('token', $request->token)->where('email', $request->email)->delete();

        return redirect()->route('penduduk.login')->with('success', 'Pengaturan ulang kata sandi berhasil.');
    }
}
