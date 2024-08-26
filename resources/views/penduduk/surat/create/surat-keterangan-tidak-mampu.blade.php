@extends('penduduk.layouts.main')

@section('title', $jenis_surat->nama ?? '')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <form id="form_submit" action="{{ route('penduduk.surat.store', $jenis_surat) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card">
                            <div class="card-status-top bg-primary"></div>
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="card-title mb-1">
                                            {{ $jenis_surat->nama ?? '' }}
                                        </h3>
                                        <div class="text-muted">
                                            Input dengan tanda <strong class="text-danger">*</strong> wajib diisi!
                                        </div>
                                    </div>
                                </div>
                                <div class="card-actions">
                                    <a class="btn-link text-warning mx-2" href="{{ route('penduduk.surat.new') }}">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Keperluan
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="keperluan"
                                            class="form-control @error('keperluan') is-invalid @enderror"
                                            value="{{ old('keperluan') }}" />
                                        @error('keperluan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {!! JsValidator::formRequest('App\Http\Requests\Penduduk\Surat\StoreRequest', '#form_submit') !!}
@endpush
