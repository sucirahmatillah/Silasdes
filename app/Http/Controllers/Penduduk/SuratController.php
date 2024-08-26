<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\Surat\StoreRequest;
use App\Http\Requests\Penduduk\Surat\UpdateRequest;
use App\Models\JenisSurat;
use App\Models\Penduduk;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SuratController extends Controller
{
    public function index()
    {
        $data = Surat::where('id_penduduk', auth()->guard('penduduk')->id())->get();
        return view('penduduk.surat.index', compact('data'));
    }

    public function new()
    {
        $jenis_surat = JenisSurat::all();
        return view('penduduk.surat.new', compact('jenis_surat'));
    }

    public function create(JenisSurat $jenis_surat)
    {
        if (auth()->guard('penduduk')->user()->no_kk) {
            return view('penduduk.surat.create.' . $jenis_surat->id, compact('jenis_surat'));
        }
        return redirect()->route('penduduk.account.profile.edit');
    }

    public function store(StoreRequest $request, JenisSurat $jenis_surat)
    {
        $surat = Surat::create([
            'id_jenis_surat' => $jenis_surat->id,
            'no_surat' => noSurat($jenis_surat),
            'id_penduduk' => auth()->guard('penduduk')->id(),
            'keperluan' => ucfirst($request->keperluan),
            'tanggal_surat' => now(),
            'id_status_surat' => 1,
        ]);

        // Surat Keterangan Domisili
        if ($jenis_surat->id == 'surat-keterangan-domisili') {

            $skd = $surat->suratKeteranganDomisili()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
            ]);

            if ($request->hasFile('file_surat_pengantar')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skd->file_surat_pengantar)))) {
                    File::delete(public_path('uploads' . '/' . basename($skd->file_surat_pengantar)));
                }

                $file_surat_pengantar = Str::uuid() . '.' . $request->file_surat_pengantar->extension();

                if ($request->file_surat_pengantar->move(public_path('uploads'), $file_surat_pengantar)) {
                    $skd->update([
                        'file_surat_pengantar' => asset('') . 'uploads' . '/' . $file_surat_pengantar,
                    ]);
                };
            }

            if ($request->hasFile('file_surat_permohonan')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skd->file_surat_permohonan)))) {
                    File::delete(public_path('uploads' . '/' . basename($skd->file_surat_permohonan)));
                }

                $file_surat_permohonan = Str::uuid() . '.' . $request->file_surat_permohonan->extension();

                if ($request->file_surat_permohonan->move(public_path('uploads'), $file_surat_permohonan)) {
                    $skd->update([
                        'file_surat_permohonan' => asset('') . 'uploads' . '/' . $file_surat_permohonan,
                    ]);
                };
            }

            if ($request->hasFile('file_surat_kuasa')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skd->file_surat_kuasa)))) {
                    File::delete(public_path('uploads' . '/' . basename($skd->file_surat_kuasa)));
                }

                $file_surat_kuasa = Str::uuid() . '.' . $request->file_surat_kuasa->extension();

                if ($request->file_surat_kuasa->move(public_path('uploads'), $file_surat_kuasa)) {
                    $skd->update([
                        'file_surat_kuasa' => asset('') . 'uploads' . '/' . $file_surat_kuasa,
                    ]);
                };
            }
        }

        // Surat Keterangan Kelahiran
        if ($jenis_surat->id == 'surat-keterangan-kelahiran') {

            $skl = $surat->suratKeteranganKelahiran()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
                'nama' => ucwords($request->nama),
                'id_jenis_kelamin' => $request->id_jenis_kelamin,
                'id_agama' => $request->id_agama,
                'anak_ke' => $request->anak_ke,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jam_lahir' => $request->jam_lahir,
                'berat_badan' => $request->berat_badan,
                'nama_ayah' => ucwords($request->nama_ayah),
                'nama_ibu' => ucwords($request->nama_ibu),
                'alamat' => ucfirst($request->alamat),
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_kelurahan' => $request->id_kelurahan,
            ]);

            if ($request->hasFile('file_surat_pengantar')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skl->file_surat_pengantar)))) {
                    File::delete(public_path('uploads' . '/' . basename($skl->file_surat_pengantar)));
                }

                $file_surat_pengantar = Str::uuid() . '.' . $request->file_surat_pengantar->extension();

                if ($request->file_surat_pengantar->move(public_path('uploads'), $file_surat_pengantar)) {
                    $skl->update([
                        'file_surat_pengantar' => asset('') . 'uploads' . '/' . $file_surat_pengantar,
                    ]);
                };
            }
        }

        // Surat Keterangan Kematian
        if ($jenis_surat->id == 'surat-keterangan-kematian') {

            $penduduk = Penduduk::updateOrCreate(['nik' => $request->nik], [
                'nama' => ucfirst($request->nama),
                'nik' => $request->nik,
                'id_jenis_kelamin' => $request->id_jenis_kelamin,
                'tempat_lahir' => ucfirst($request->tempat_lahir),
                'tanggal_lahir' => $request->tanggal_lahir,
                'id_kewarganegaraan' => $request->id_kewarganegaraan,
                'id_agama' => $request->id_agama,
                'id_status_perkawinan' => $request->id_status_perkawinan,
                'id_pekerjaan' => $request->id_pekerjaan,
                'alamat' => ucfirst($request->alamat),
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_kelurahan' => $request->id_kelurahan,
            ]);

            $skm = $surat->suratKeteranganKematian()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
                'id_penduduk' => $penduduk->id,
                'bin_binti' => ucwords($request->bin_binti),
                'tanggal_meninggal' => $request->tanggal_meninggal,
                'jam_meninggal' => $request->jam_meninggal,
                'tempat_meninggal' => ucwords($request->tempat_meninggal),
                'sebab_kematian' => ucfirst($request->sebab_kematian),
            ]);

            if ($request->hasFile('file_surat_pengantar')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skm->file_surat_pengantar)))) {
                    File::delete(public_path('uploads' . '/' . basename($skm->file_surat_pengantar)));
                }

                $file_surat_pengantar = Str::uuid() . '.' . $request->file_surat_pengantar->extension();

                if ($request->file_surat_pengantar->move(public_path('uploads'), $file_surat_pengantar)) {
                    $skm->update([
                        'file_surat_pengantar' => asset('') . 'uploads' . '/' . $file_surat_pengantar,
                    ]);
                };
            }
        }

        // Surat Keterangan Tidak Mampu
        if ($jenis_surat->id == 'surat-keterangan-tidak-mampu') {
            $sktm = $surat->suratKeteranganTidakMampu()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
            ]);
        }

        // Surat Pengantar Pembuatan KTP
        if ($jenis_surat->id == 'surat-pengantar-pembuatan-ktp') {

            $sppk = $surat->suratPengantarPembuatanKtp()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
            ]);

            if ($request->hasFile('file_pendukung')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($sppk->file_pendukung)))) {
                    File::delete(public_path('uploads' . '/' . basename($sppk->file_pendukung)));
                }

                $file_pendukung = Str::uuid() . '.' . $request->file_pendukung->extension();

                if ($request->file_pendukung->move(public_path('uploads'), $file_pendukung)) {
                    $sppk->update([
                        'file_pendukung' => asset('') . 'uploads' . '/' . $file_pendukung,
                    ]);
                };
            }
        }

        return redirect()->route('penduduk.surat.index')->with('success', 'Berhasil ditambahkan.');
    }

    public function edit(JenisSurat $jenis_surat, Surat $surat)
    {
        return view('penduduk.surat.edit.' . $jenis_surat->id, compact('jenis_surat', 'surat'));
    }

    public function update(UpdateRequest $request, JenisSurat $jenis_surat, Surat $surat)
    {
        $surat->update([
            'keperluan' => ucfirst($request->keperluan),
        ]);

        // Surat Keterangan Domisili
        if ($jenis_surat->id == 'surat-keterangan-domisili') {

            $skd = $surat->suratKeteranganDomisili()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
            ]);

            if ($request->hasFile('file_surat_pengantar')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skd->file_surat_pengantar)))) {
                    File::delete(public_path('uploads' . '/' . basename($skd->file_surat_pengantar)));
                }

                $file_surat_pengantar = Str::uuid() . '.' . $request->file_surat_pengantar->extension();

                if ($request->file_surat_pengantar->move(public_path('uploads'), $file_surat_pengantar)) {
                    $skd->update([
                        'file_surat_pengantar' => asset('') . 'uploads' . '/' . $file_surat_pengantar,
                    ]);
                };
            }

            if ($request->hasFile('file_surat_permohonan')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skd->file_surat_permohonan)))) {
                    File::delete(public_path('uploads' . '/' . basename($skd->file_surat_permohonan)));
                }

                $file_surat_permohonan = Str::uuid() . '.' . $request->file_surat_permohonan->extension();

                if ($request->file_surat_permohonan->move(public_path('uploads'), $file_surat_permohonan)) {
                    $skd->update([
                        'file_surat_permohonan' => asset('') . 'uploads' . '/' . $file_surat_permohonan,
                    ]);
                };
            }

            if ($request->hasFile('file_surat_kuasa')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skd->file_surat_kuasa)))) {
                    File::delete(public_path('uploads' . '/' . basename($skd->file_surat_kuasa)));
                }

                $file_surat_kuasa = Str::uuid() . '.' . $request->file_surat_kuasa->extension();

                if ($request->file_surat_kuasa->move(public_path('uploads'), $file_surat_kuasa)) {
                    $skd->update([
                        'file_surat_kuasa' => asset('') . 'uploads' . '/' . $file_surat_kuasa,
                    ]);
                };
            }
        }

        // Surat Keterangan Kelahiran
        if ($jenis_surat->id == 'surat-keterangan-kelahiran') {

            $skl = $surat->suratKeteranganKelahiran()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
                'nama' => ucwords($request->nama),
                'id_jenis_kelamin' => $request->id_jenis_kelamin,
                'id_agama' => $request->id_agama,
                'anak_ke' => $request->anak_ke,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jam_lahir' => $request->jam_lahir,
                'berat_badan' => $request->berat_badan,
                'nama_ayah' => ucwords($request->nama_ayah),
                'nama_ibu' => ucwords($request->nama_ibu),
                'alamat' => ucfirst($request->alamat),
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_kelurahan' => $request->id_kelurahan,
            ]);

            if ($request->hasFile('file_surat_pengantar')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skl->file_surat_pengantar)))) {
                    File::delete(public_path('uploads' . '/' . basename($skl->file_surat_pengantar)));
                }

                $file_surat_pengantar = Str::uuid() . '.' . $request->file_surat_pengantar->extension();

                if ($request->file_surat_pengantar->move(public_path('uploads'), $file_surat_pengantar)) {
                    $skl->update([
                        'file_surat_pengantar' => asset('') . 'uploads' . '/' . $file_surat_pengantar,
                    ]);
                };
            }
        }

        // Surat Keterangan Kematian
        if ($jenis_surat->id == 'surat-keterangan-kematian') {

            $penduduk = Penduduk::updateOrCreate(['nik' => $request->nik], [
                'nama' => ucfirst($request->nama),
                'nik' => $request->nik,
                'id_jenis_kelamin' => $request->id_jenis_kelamin,
                'tempat_lahir' => ucfirst($request->tempat_lahir),
                'tanggal_lahir' => $request->tanggal_lahir,
                'id_kewarganegaraan' => $request->id_kewarganegaraan,
                'id_agama' => $request->id_agama,
                'id_status_perkawinan' => $request->id_status_perkawinan,
                'id_pekerjaan' => $request->id_pekerjaan,
                'alamat' => ucfirst($request->alamat),
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'id_provinsi' => $request->id_provinsi,
                'id_kab_kota' => $request->id_kab_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_kelurahan' => $request->id_kelurahan,
            ]);

            $skm = $surat->suratKeteranganKematian()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
                'id_penduduk' => $penduduk->id,
                'bin_binti' => ucwords($request->bin_binti),
                'tanggal_meninggal' => $request->tanggal_meninggal,
                'jam_meninggal' => $request->jam_meninggal,
                'tempat_meninggal' => ucwords($request->tempat_meninggal),
                'sebab_kematian' => ucfirst($request->sebab_kematian),
            ]);

            if ($request->hasFile('file_surat_pengantar')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($skm->file_surat_pengantar)))) {
                    File::delete(public_path('uploads' . '/' . basename($skm->file_surat_pengantar)));
                }

                $file_surat_pengantar = Str::uuid() . '.' . $request->file_surat_pengantar->extension();

                if ($request->file_surat_pengantar->move(public_path('uploads'), $file_surat_pengantar)) {
                    $skm->update([
                        'file_surat_pengantar' => asset('') . 'uploads' . '/' . $file_surat_pengantar,
                    ]);
                };
            }
        }

        // Surat Keterangan Tidak Mampu
        if ($jenis_surat->id == 'surat-keterangan-tidak-mampu') {
            $sktm = $surat->suratKeteranganTidakMampu()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
            ]);
        }

        // Surat Pengantar Pembuatan KTP
        if ($jenis_surat->id == 'surat-pengantar-pembuatan-ktp') {

            $sppk = $surat->suratPengantarPembuatanKtp()->updateOrCreate(['id_surat' => $surat->id], [
                'id_surat' => $surat->id,
            ]);

            if ($request->hasFile('file_pendukung')) {

                if (!File::isDirectory(public_path('uploads'))) {
                    File::makeDirectory(public_path('uploads'), 0777, true, true);
                }

                if (File::exists(public_path('uploads' . '/' . basename($sppk->file_pendukung)))) {
                    File::delete(public_path('uploads' . '/' . basename($sppk->file_pendukung)));
                }

                $file_pendukung = Str::uuid() . '.' . $request->file_pendukung->extension();

                if ($request->file_pendukung->move(public_path('uploads'), $file_pendukung)) {
                    $sppk->update([
                        'file_pendukung' => asset('') . 'uploads' . '/' . $file_pendukung,
                    ]);
                };
            }
        }

        return redirect()->route('penduduk.surat.index')->with('success', 'Berhasil disimpan.');
    }

    public function show(Surat $surat)
    {
        return view('penduduk.surat.show.' . $surat->id_jenis_surat, compact('surat'));
    }

    public function destroy(Surat $surat)
    {
        if ($surat->suratKeteranganDomisili) {
            if (File::exists(public_path('uploads' . '/' . basename($surat->suratKeteranganDomisili->file_surat_pengantar)))) {
                File::delete(public_path('uploads' . '/' . basename($surat->suratKeteranganDomisili->file_surat_pengantar)));
            }
            if (File::exists(public_path('uploads' . '/' . basename($surat->suratKeteranganDomisili->file_surat_permohonan)))) {
                File::delete(public_path('uploads' . '/' . basename($surat->suratKeteranganDomisili->file_surat_permohonan)));
            }
            if (File::exists(public_path('uploads' . '/' . basename($surat->suratKeteranganDomisili->file_surat_kuasa)))) {
                File::delete(public_path('uploads' . '/' . basename($surat->suratKeteranganDomisili->file_surat_kuasa)));
            }

            $surat->suratKeteranganDomisili->delete();
        }

        if ($surat->suratKeteranganKelahiran) {
            if (File::exists(public_path('uploads' . '/' . basename($surat->suratKeteranganKelahiran->file_surat_pengantar)))) {
                File::delete(public_path('uploads' . '/' . basename($surat->suratKeteranganKelahiran->file_surat_pengantar)));
            }

            $surat->suratKeteranganKelahiran->delete();
        }

        if ($surat->suratKeteranganKematian) {
            if (File::exists(public_path('uploads' . '/' . basename($surat->suratKeteranganKematian->file_surat_pengantar)))) {
                File::delete(public_path('uploads' . '/' . basename($surat->suratKeteranganKematian->file_surat_pengantar)));
            }

            $surat->suratKeteranganKematian->delete();
        }

        if ($surat->suratKeteranganTidakMampu) {
            $surat->suratKeteranganTidakMampu->delete();
        }

        if ($surat->suratPengantarPembuatanKtp) {
            if (File::exists(public_path('uploads' . '/' . basename($surat->suratPengantarPembuatanKtp->file_pendukung)))) {
                File::delete(public_path('uploads' . '/' . basename($surat->suratPengantarPembuatanKtp->file_pendukung)));
            }

            $surat->suratPengantarPembuatanKtp->delete();
        }

        $surat->delete();

        return redirect()->back()->with('success', 'Berhasil dihapus.');
    }
}
