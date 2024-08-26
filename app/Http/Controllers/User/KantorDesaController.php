<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\KantorDesa\UpdateRequest;
use App\Models\KabKota;
use App\Models\KantorDesa;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KantorDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:index-kantor-desa')->only('index');
        $this->middleware('permission:update-kantor-desa')->only('update');
    }

    public function index(Request $request)
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

        $kantor_desa = KantorDesa::orderByRaw('CONVERT(id, SIGNED) asc')->first();
        return view('user.kantor-desa.index', compact('kantor_desa'));
    }

    public function update(UpdateRequest $request)
    {
        $kantor_desa = KantorDesa::orderByRaw('CONVERT(id, SIGNED) asc')->first();
        if (!$kantor_desa) {
            $kantor_desa = KantorDesa::create([
                'id' => 1,
                'kode' => strtoupper($request->kode ?? ''),
                'alamat' => ucwords($request->alamat ?? ''),
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_kelurahan' => $request->id_kelurahan,
                'telepon' => $request->telepon ?? null,
                'email' => $request->email ? strtolower($request->email ?? '') : null,
                'website' => $request->website ?? null,
                'logo' => null,
                'nama_kepala_desa' => $request->nama_kepala_desa,
                'nip_kepala_desa' => $request->nip_kepala_desa,
                'ttd_kepala_desa' => null,
            ]);
        } else {
            $kantor_desa->update([
                'id' => 1,
                'kode' => strtoupper($request->kode ?? ''),
                'alamat' => ucwords($request->alamat ?? ''),
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_kelurahan' => $request->id_kelurahan,
                'telepon' => $request->telepon ?? null,
                'email' => $request->email ? strtolower($request->email ?? '') : null,
                'website' => $request->website ?? null,
                'nama_kepala_desa' => $request->nama_kepala_desa,
                'nip_kepala_desa' => $request->nip_kepala_desa,
            ]);
        }

        if ($request->hasFile('logo')) {

            if (!File::isDirectory(public_path('kantor-desa'))) {
                File::makeDirectory(public_path('kantor-desa'), 0777, true, true);
            }

            if (File::exists(public_path('kantor-desa' . '/' . $kantor_desa->logo))) {
                File::delete(public_path('kantor-desa' . '/' . $kantor_desa->logo));
            }

            $logo = 'logo' . '.' . $request->logo->extension();

            if ($request->logo->move(public_path('kantor-desa'), $logo)) {
                $kantor_desa->update([
                    'logo' => $logo,
                ]);
            };
        }

        if ($request->hasFile('ttd_kepala_desa')) {

            if (!File::isDirectory(public_path('kantor-desa'))) {
                File::makeDirectory(public_path('kantor-desa'), 0777, true, true);
            }

            if (File::exists(public_path('kantor-desa' . '/' . $kantor_desa->ttd_kepala_desa))) {
                File::delete(public_path('kantor-desa' . '/' . $kantor_desa->ttd_kepala_desa));
            }

            $ttd_kepala_desa = 'ttd-kepala-desa' . '.' . $request->ttd_kepala_desa->extension();

            if ($request->ttd_kepala_desa->move(public_path('kantor-desa'), $ttd_kepala_desa)) {
                $kantor_desa->update([
                    'ttd_kepala_desa' => $ttd_kepala_desa,
                ]);
            };
        }

        return redirect()->back()->with('success', 'Pengaturan Kantor Desa berhasil disimpan');
    }
}
