@extends('penduduk.layouts.main')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Selamat Datang
                    </div>
                    <h2 class="page-title">
                        {{ auth()->guard('penduduk')->user()->nama ?? '-' }}
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('penduduk.surat.new') }}" class="btn btn-primary">
                                Buat Pengajuan Baru
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                @foreach (jenisSurat() as $item)
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-red">
                                    <span class="text-red d-inline-flex align-items-center lh-1"></span>
                                </div>
                                <div class="h1 m-0">{{ totalSuratByPenduduk($item) ?? '0' }}</div>
                                <div class="text-muted mb-3">{{ $item->nama ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
