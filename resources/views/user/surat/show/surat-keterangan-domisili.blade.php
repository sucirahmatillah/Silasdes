@extends('user.layouts.main')

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
                                @if ($surat->id_status_surat == 4)
                                    <a class="btn-link text-secondary mx-2" href="{{ route('user.surat.print', $surat) }}"
                                        target="_blank">
                                        Print
                                    </a>
                                @endif
                                <a class="btn-link text-info mx-2"
                                    href="{{ route('user.surat.edit', [
                                        'jenis_surat' => $surat->id_jenis_surat,
                                        'surat' => $surat,
                                    ]) }}">
                                    Ubah
                                </a>
                                <a class="btn-link text-warning mx-2" href="{{ route('user.surat.index') }}">
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
                                    Penduduk (Pemohon)
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
                                    {{ $surat->keterangan ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Surat Pengantar RT/RW
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($surat->suratKeteranganDomisili->file_surat_pengantar)
                                        <a href="{{ $surat->suratKeteranganDomisili->file_surat_pengantar }}"
                                            target="_blank">
                                            Lihat
                                        </a>
                                    @else
                                        <span class="text-warning">Belum Upload</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Surat Permohonan dengan Materai
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($surat->suratKeteranganDomisili->file_surat_permohonan)
                                        <a href="{{ $surat->suratKeteranganDomisili->file_surat_permohonan }}"
                                            target="_blank">
                                            Lihat
                                        </a>
                                    @else
                                        <span class="text-warning">Belum Upload</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Surat Kuasa dengan Materai
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($surat->suratKeteranganDomisili->file_surat_kuasa)
                                        <a href="{{ $surat->suratKeteranganDomisili->file_surat_kuasa }}" target="_blank">
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
