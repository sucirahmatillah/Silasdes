@extends('user.layouts.main')

@section('title', $jenis_surat->nama ?? '')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <form id="form_submit"
                        action="{{ route('user.surat.update', [
                            'jenis_surat' => $jenis_surat,
                            'surat' => $surat,
                        ]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                                    <a class="btn-link text-warning mx-2" href="{{ route('user.surat.index') }}">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Penduduk (Pemohon)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select class="form-select @error('id_penduduk') is-invalid @enderror"
                                            name="id_penduduk">
                                            <option value=""></option>
                                            @foreach (penduduk() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_penduduk') == $item->id || $surat->id_penduduk == $item->id)>
                                                    {{ $item->nama ?? '-' }}&nbsp;-&nbsp;{{ $item->nik }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_penduduk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Keperluan
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="keperluan"
                                            class="form-control @error('keperluan') is-invalid @enderror"
                                            value="{{ old('keperluan') ?? $surat->keperluan }}" />
                                        @error('keperluan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Tanggal Surat
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="date" name="tanggal_surat"
                                            class="form-control @error('tanggal_surat') is-invalid @enderror"
                                            value="{{ old('tanggal_surat') ?? $surat->tanggal_surat }}" />
                                        @error('tanggal_surat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Surat Pengantar dari RT/RW (Scan/Foto)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="file_surat_pengantar"
                                            class="form-control @error('file_surat_pengantar') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('file_surat_pengantar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Ekstensi: PNG, JPG | Max: 2MB.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Surat Permohonan dengan Materai (Scan/Foto)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="file_surat_permohonan"
                                            class="form-control @error('file_surat_permohonan') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('file_surat_permohonan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Ekstensi: PNG, JPG | Max: 2MB.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Surat Kuasa dengan Materai jika diwakilkan (Scan/Foto)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="file_surat_kuasa"
                                            class="form-control @error('file_surat_kuasa') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('file_surat_kuasa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Ekstensi: PNG, JPG | Max: 2MB.
                                        </small>
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
    {!! JsValidator::formRequest('App\Http\Requests\User\Surat\UpdateRequest', '#form_submit') !!}
@endpush
