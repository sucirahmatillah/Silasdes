@extends('penduduk.layouts.main')

@section('title', $surat->jenisSurat->nama ?? '')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title mb-1">
                                        Detail
                                    </h3>
                                    <div class="text-muted">
                                        Informasi {{ $surat->jenisSurat->nama ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-actions">
                                @if ($surat->id_status_surat != 4)
                                    <a class="btn-link text-info mx-2"
                                        href="{{ route('penduduk.surat.edit', [
                                            'jenis_surat' => $surat->id_jenis_surat,
                                            'surat' => $surat,
                                        ]) }}">
                                        Ubah
                                    </a>
                                @endif
                                <a class="btn-link text-warning mx-2" href="{{ route('penduduk.surat.index') }}">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    No. Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->no_surat ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jenis Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->jenisSurat->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Pemohon
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->penduduk->nama ?? '-' }}&nbsp;-&nbsp;{{ $surat->penduduk->nik ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->tanggal_surat ? date_format(date_create($surat->tanggal_surat), 'd-m-Y') : '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Keperluan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->keperluan ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Keterangan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($surat->keterangan)
                                        {{ $surat->keterangan ?? '-' }}
                                    @else
                                        {{ $surat->statusSurat->keterangan ?? '-' }}
                                    @endif
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jenis Kelamin
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->jenisKelamin->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Agama
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->agama->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Anak Ke
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->anak_ke ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Lahir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->tanggal_lahir ? date_format(date_create($surat->suratKeteranganKelahiran->tanggal_lahir), 'd-m-Y') : '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jam Lahir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->jam_lahir ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Berat Badan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->berat_badan ?? '-' }} gram
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama Ayah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->nama_ayah ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama Ibu
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKelahiran->nama_ibu ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Alamat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ ucwords($surat->suratKeteranganKelahiran->alamat ?? '-') }},
                                    RT. {{ ucwords($surat->suratKeteranganKelahiran->rt ?? '-') }}
                                    RW. {{ ucwords($surat->suratKeteranganKelahiran->rw ?? '-') }},
                                    Kel. {{ ucwords($surat->suratKeteranganKelahiran->kelurahan->nama ?? '-') }},
                                    Kec. {{ ucwords($surat->suratKeteranganKelahiran->kecamatan->nama ?? '-') }},
                                    {{ ucwords($surat->suratKeteranganKelahiran->kabKota->nama ?? '-') }},
                                    {{ ucwords($surat->suratKeteranganKelahiran->provinsi->nama ?? '-') }},
                                    {{ $surat->suratKeteranganKelahiran->kode_pos ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Surat Pengantar RT/RW
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($surat->suratKeteranganKelahiran->file_surat_pengantar)
                                        <a href="{{ $surat->suratKeteranganKelahiran->file_surat_pengantar }}"
                                            target="_blank">
                                            Lihat
                                        </a>
                                    @else
                                        <span class="text-warning">Belum Upload</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
