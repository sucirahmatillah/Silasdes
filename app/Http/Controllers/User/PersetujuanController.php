<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:index-persetujuan')->only('index');
        $this->middleware('permission:show-persetujuan')->only('show');
        $this->middleware('permission:setujui-persetujuan')->only('setujui');
    }

    public function index()
    {
        $data = Surat::where('id_status_surat', 3)->orderBy('created_at', 'desc')->get();
        return view('user.persetujuan.index', compact('data'));
    }

    public function show(Surat $surat)
    {
        return view('user.persetujuan.show.' . $surat->id_jenis_surat, compact('surat'));
    }

    public function setujui(Surat $surat)
    {
        $surat->update([
            'id_status_surat' => 4,
        ]);

        return redirect()->back()->with('success', 'Surat berhasil disetujui');
    }
}
