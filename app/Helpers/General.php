<?php

use App\Models\Agama;
use App\Models\KantorDesa;
use App\Models\GolonganDarah;
use App\Models\JenisKelamin;
use App\Models\JenisSurat;
use App\Models\KabKota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kewarganegaraan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penduduk;
use App\Models\Provinsi;
use App\Models\Shdk;
use App\Models\StatusPerkawinan;
use App\Models\StatusSurat;
use App\Models\Surat;
use Spatie\Permission\Models\Role;

function kantorDesa()
{
    $data = KantorDesa::orderByRaw('CONVERT(id, SIGNED) asc')->first();
    return $data;
}

function role()
{
    $data = Role::all();
    return $data;
}

function jenisKelamin()
{
    $data = JenisKelamin::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function golonganDarah()
{
    $data = GolonganDarah::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function agama()
{
    $data = Agama::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function statusPerkawinan()
{
    $data = StatusPerkawinan::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function shdk()
{
    $data = Shdk::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function pendidikan()
{
    $data = Pendidikan::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function pekerjaan()
{
    $data = Pekerjaan::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function kewarganegaraan()
{
    $data = Kewarganegaraan::orderByRaw('CONVERT(id, SIGNED) asc')->get();
    return $data;
}

function provinsi()
{
    $data = Provinsi::orderBy('nama', 'asc')->get();
    return $data;
}

function kabKota($id_provinsi = '')
{
    $data = KabKota::where('id_provinsi', $id_provinsi)->orderBy('nama', 'asc')->get();
    return $data;
}

function kecamatan($id_kab_kota = '')
{
    $data = Kecamatan::where('id_kab_kota', $id_kab_kota)->orderBy('nama', 'asc')->get();
    return $data;
}

function kelurahan($id_kecamatan = '')
{
    $data = Kelurahan::where('id_kecamatan', $id_kecamatan)->orderBy('nama', 'asc')->get();
    return $data;
}

function jenisSurat()
{
    $data = JenisSurat::orderBy('nama', 'asc')->get();
    return $data;
}

function statusSurat()
{
    $data = StatusSurat::whereNotIn('id', [4])->get();
    return $data;
}

function number()
{
    $data = [];
    for ($i = 0; $i < 100; $i++) {
        $data[] = str_pad(($i + 1), 3, '0', STR_PAD_LEFT);
    }
    return $data;
}


function penduduk()
{
    $data = Penduduk::orderBy('nama', 'asc')->get();
    return $data;
}

function noSurat(JenisSurat $jenis_surat)
{
    $last_surat = Surat::where('no_surat', 'like', $jenis_surat->kode . '%')->orderBy('created_at', 'desc')->pluck('no_surat')->first();

    $last_year = substr($last_surat, -4, 4);

    if ($last_surat) {
        if ($last_year == date('Y')) {
            $number = sprintf("%04s", substr($last_surat, strlen($jenis_surat->kode) + 1, 4) + 1);
        } else {
            $number = "0001";
        }
    } else {
        $number = "0001";
    }

    $month = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");

    $no_surat = $jenis_surat->kode . '/' . $number . '/' . kantorDesa()->kode . '/' . $month[date('n')] . '/' . date("Y");

    return $no_surat;
}

function totalSurat(JenisSurat $jenis_surat)
{
    $data = Surat::where('id_jenis_surat', $jenis_surat->id)->count();
    return $data;
}

function totalSuratByPenduduk(JenisSurat $jenis_surat)
{
    $data = Surat::where('id_penduduk', auth()->guard('penduduk')->id())->where('id_jenis_surat', $jenis_surat->id)->count();
    return $data;
}
