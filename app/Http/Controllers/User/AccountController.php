<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Account\PasswordUpdateRequest;
use App\Http\Requests\User\Account\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function profileEdit(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        return view('user.account.profile-edit', compact('user'));
    }

    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $user = User::findOrFail(auth()->guard('user')->id());
        $user->update([
            'nama' => ucwords($request->nama),
            'email' => strtolower($request->email),
        ]);
        return redirect()->back()->with('success', 'Berhasil disimpan');
    }

    public function passwordEdit()
    {
        $user = User::findOrFail(auth()->id());
        return view('user.account.password-edit', compact('user'));
    }

    public function passwordUpdate(PasswordUpdateRequest $request)
    {
        $user = User::findOrFail(auth()->guard('user')->id());
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => 'Password yang diberikan tidak cocok dengan data kami.',
            ]);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Berhasil disimpan');
    }
}
