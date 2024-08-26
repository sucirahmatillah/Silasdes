@extends('penduduk.layouts.main')

@section('title', 'Pengajuan Baru')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <h1 class="text-center mb-3">Pilih Pengajuan Surat</h1>
            <div class="row">
                @foreach ($jenis_surat as $item)
                    <div class="col-sm-6 col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card card-md">
                            <div class="card-body">
                                <div class="text-uppercase font-weight-medium text-center">
                                    <strong> {{ $item->nama ?? '-' }}</strong>
                                </div>
                                <div class="mt-3 mb-2 text-muted text-center">PERSYARATAN</div>
                                @if ($item->id == 'surat-keterangan-domisili')
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Surat Pengantar RT/RW<span class="text-danger">*</span></li>
                                        <li>Upload Surat Permohonan dokumen dan data</li>
                                        <li>Upload Surat Kuasa jika diwakilkan</li>
                                    </ol>
                                @endif
                                @if ($item->id == 'surat-keterangan-kelahiran')
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Surat Pengantar RT/RW <span class="text-danger">*</span></li>
                                    </ol>
                                @endif
                                @if ($item->id == 'surat-keterangan-kematian')
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Surat Pengantar RT/RW <span class="text-danger">*</span></li>
                                    </ol>
                                @endif
                                @if ($item->id == 'surat-keterangan-tidak-mampu')
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                    </ol>
                                @endif
                                @if ($item->id == 'surat-pengantar-pembuatan-ktp')
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Dokumen Pendukung (Ijazah/Akta Kelahiran)<span
                                                class="text-danger">*</span></li>
                                    </ol>
                                @endif
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <a href="{{ route('penduduk.surat.create', $item) }}" class="btn btn-primary w-100">
                                        Buat Pengajuan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
