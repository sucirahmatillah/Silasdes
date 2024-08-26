<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\ResetPasswordRequest;
use App\Models\User;
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

        return view('user.auth.reset-password', compact('password_reset'));
    }

    public function passwordUpdate(ResetPasswordRequest $request)
    {
        $password_reset = DB::table('password_resets')->where('token', $request->token)->where('email', $request->email)->first();

        if (!$password_reset) {
            return redirect()->back()->withErrors([
                'email' => 'Email yang Anda masukkan tidak valid dengan token reset password',
            ])->withInput();
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return abort(404);
        }
        $user->update([
            'password' => bcrypt($request->password),
        ]);

        DB::table('password_resets')->where('token', $request->token)->where('email', $request->email)->delete();

        return redirect()->route('user.login')->with('success', 'Pengaturan ulang kata sandi berhasil.');
    }
}
