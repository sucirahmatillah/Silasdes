<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\Account\PasswordUpdateRequest;
use App\Http\Requests\Penduduk\Account\ProfileUpdateRequest;
use App\Models\KabKota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function profileEdit(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id_provinsi) {
                $data = KabKota::where('id_provinsi', $request->id_provinsi)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
            if ($request->id_kab_kota) {
                $data = Kecamatan::where('id_kab_kota', $request->id_kab_kota)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
            if ($request->id_kecamatan) {
                $data = Kelurahan::where('id_kecamatan', $request->id_kecamatan)->orderBy('nama', 'asc')->get();
                return response()->json($data);
            }
        }

        $penduduk = Penduduk::findOrFail(auth()->guard('penduduk')->id());
        return view('penduduk.account.profile-edit', compact('penduduk'));
    }

    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $validated_data = $request->validated();
        $validated_data['nama'] = ucwords($request->nama ?? "");
        $validated_data['tempat_lahir'] = ucwords($request->tempat_lahir ?? "");
        $validated_data['alamat'] = ucwords($request->alamat ?? "");
        $validated_data['nama_ibu'] = ucwords($request->nama_ibu ?? "");
        $validated_data['nama_ayah'] = ucwords($request->nama_ayah ?? "");
        $validated_data['email'] = strtolower($request->email ?? "");

        $penduduk = Penduduk::findOrFail(auth()->guard('penduduk')->id());

        if ($request->hasFile('file_kk')) {

            if (!File::isDirectory(public_path('uploads'))) {
                File::makeDirectory(public_path('uploads'), 0777, true, true);
            }

            if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_kk)))) {
                File::delete(public_path('uploads' . '/' . basename($penduduk->file_kk)));
            }

            $file_kk = Str::uuid() . '.' . $request->file_kk->extension();

            if ($request->file_kk->move(public_path('uploads'), $file_kk)) {
                $penduduk->update([
                    'file_kk' => asset('') . 'uploads' . '/' . $file_kk,
                ]);
            };
        }

        if ($request->hasFile('file_ktp')) {

            if (!File::isDirectory(public_path('uploads'))) {
                File::makeDirectory(public_path('uploads'), 0777, true, true);
            }

            if (File::exists(public_path('uploads' . '/' . basename($penduduk->file_ktp)))) {
                File::delete(public_path('uploads' . '/' . basename($penduduk->file_ktp)));
            }

            $file_ktp = Str::uuid() . '.' . $request->file_ktp->extension();

            if ($request->file_ktp->move(public_path('uploads'), $file_ktp)) {
                $penduduk->update([
                    'file_ktp' => asset('') . 'uploads' . '/' . $file_ktp,
                ]);
            };
        }

        $penduduk->update($validated_data);

        return redirect()->back()->with('success', 'Berhasil disimpan');
    }

    public function passwordEdit()
    {
        $penduduk = Penduduk::findOrFail(auth()->guard('penduduk')->id());
        return view('penduduk.account.password-edit', compact('penduduk'));
    }

    public function passwordUpdate(PasswordUpdateRequest $request)
    {
        $penduduk = Penduduk::findOrFail(auth()->guard('penduduk')->id());

        if (!Hash::check($request->current_password, $penduduk->password)) {
            return back()->withErrors([
                'current_password' => 'Password yang diberikan tidak cocok dengan data kami.',
            ]);
        }

        $penduduk->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Berhasil disimpan');
    }
}
