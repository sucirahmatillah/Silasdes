zzzzzz<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function index()
    {
        $data = Surat::where('id_penduduk', auth()->guard('penduduk')->id())->get();
        return view('penduduk.cetak.index', compact('data'));
    }

    public function print(Surat $surat)
    {
        if ($surat->id_status_surat != 4) {
            return abort(404);
        }
        return view("pdf/".$surat->id_jenis_surat, compact("surat"));
        // $pdf = Pdf::loadView('pdf.' . $surat->id_jenis_surat, $surat)->setPaper('a4', 'portrait');
        // return $pdf->stream($surat->jenisSurat->nama . '-' . $surat->penduduk->nik . ".pdf");

    }
}
