<?php

namespace App\Http\Controllers;

use App\Models\KabKota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class ReferensiController extends Controller
{
    public function wilayah(Request $request)
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
    }
}
