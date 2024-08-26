@extends('user.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body p-2 text-center">
                            <div class="text-end text-red">
                                <span class="text-red d-inline-flex align-items-center lh-1"></span>
                            </div>
                            <div class="h1 m-0">{{ $total_penduduk ?? '0' }}</div>
                            <div class="text-muted mb-3">Total Penduduk</div>
                        </div>
                    </div>
                </div>
                @foreach (jenisSurat() as $item)
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-red">
                                    <span class="text-red d-inline-flex align-items-center lh-1"></span>
                                </div>
                                <div class="h1 m-0">{{ totalSurat($item) ?? '0' }}</div>
                                <div class="text-muted mb-3">{{ $item->nama ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
