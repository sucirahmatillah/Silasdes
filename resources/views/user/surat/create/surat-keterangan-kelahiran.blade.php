@extends('user.layouts.main')

@section('title', $jenis_surat->nama ?? '')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <form id="form_submit" action="{{ route('user.surat.store', $jenis_surat) }}" method="POST"
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
                                                <option value="{{ $item->id }}" @selected(old('id_penduduk') == $item->id)>
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
                                            value="{{ old('keperluan') }}" />
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
                                            value="{{ old('tanggal_surat') }}" />
                                        @error('tanggal_surat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <u><strong>Data Kelahiran</strong></u>
                                <div class="form-group my-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') }}" />
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Jenis Kelamin
                                    </div>
                                    <div class="col-md-9 col-12">
                                        @foreach (jenisKelamin() as $item)
                                            <label class="form-check form-check-inline mt-2">
                                                <input type="radio" name="id_jenis_kelamin"
                                                    class="form-check-input @error('id_jenis_kelamin') is-invalid @enderror"
                                                    value="{{ $item->id }}" @checked(old('id_jenis_kelamin') == $item->id) />
                                                <span class="form-check-label">
                                                    {{ $item->nama }}
                                                </span>
                                            </label>
                                        @endforeach
                                        @error('id_jenis_kelamin')
                                            <small class="text-danger d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Agama
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="id_agama" class="form-select @error('id_agama') is-invalid @enderror">
                                            <option value=""></option>
                                            @foreach (agama() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_agama') == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_agama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Anak Ke
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="number" name="anak_ke"
                                            class="form-control @error('anak_ke') is-invalid @enderror"
                                            value="{{ old('anak_ke') }}" />
                                        @error('anak_ke')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Tanggal Lahir
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            value="{{ old('tanggal_lahir') }}" />
                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Jam Lahir
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="time" name="jam_lahir"
                                            class="form-control @error('jam_lahir') is-invalid @enderror"
                                            value="{{ old('jam_lahir') }}" />
                                        @error('jam_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Berat Badan (Gram)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="number" name="berat_badan"
                                            class="form-control @error('berat_badan') is-invalid @enderror"
                                            value="{{ old('berat_badan') }}" />
                                        @error('berat_badan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama Ayah
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama_ayah"
                                            class="form-control @error('nama_ayah') is-invalid @enderror"
                                            value="{{ old('nama_ayah') }}" />
                                        @error('nama_ayah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama Ibu
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama_ibu"
                                            class="form-control @error('nama_ibu') is-invalid @enderror"
                                            value="{{ old('nama_ibu') }}" />
                                        @error('nama_ibu')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Alamat
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-3">
                                                <input type="text" name="alamat"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                    value="{{ old('alamat') }}" />
                                                @error('alamat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-4 mb-3">
                                                <select class="form-select @error('rt') is-invalid @enderror"
                                                    name="rt">
                                                    <option value="">RT</option>
                                                    @foreach (number() as $item)
                                                        <option value="{{ $item }}" @selected(old('rt') == $item)>
                                                            {{ $item }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('rt')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 col-4 mb-3">
                                                <select class="form-select @error('rw') is-invalid @enderror"
                                                    name="rw">
                                                    <option value="">RW</option>
                                                    @foreach (number() as $item)
                                                        <option value="{{ $item }}" @selected(old('rw') == $item)>
                                                            {{ $item }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('rw')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-4 mb-3">
                                                <input type="text" name="kode_pos"
                                                    class="form-control @error('kode_pos') is-invalid @enderror"
                                                    placeholder="Kode POS" value="{{ old('kode_pos') }}" />
                                                @error('kode_pos')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-3">
                                                <select name="id_provinsi"
                                                    class="form-select @error('id_provinsi') is-invalid @enderror">
                                                    <option value="">Provinsi</option>
                                                    @foreach (provinsi() as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_provinsi') == $item->id)>
                                                            {{ $item->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_provinsi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-3">
                                                <select name="id_kab_kota"
                                                    class="form-select @error('id_kab_kota') is-invalid @enderror">
                                                    <option value="">Kabupaten/Kota</option>
                                                    @foreach (kabKota(old('id_provinsi')) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kab_kota') == $item->id)>
                                                            {{ $item->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_kab_kota')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-3">
                                                <select name="id_kecamatan"
                                                    class="form-select @error('id_kecamatan') is-invalid @enderror">
                                                    <option value="">Kecamatan</option>
                                                    @foreach (kecamatan(old('id_kab_kota')) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kecamatan') == $item->id)>
                                                            {{ $item->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_kecamatan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-3">
                                                <select name="id_kelurahan"
                                                    class="form-select @error('id_kelurahan') is-invalid @enderror">
                                                    <option value="">Kelurahan</option>
                                                    @foreach (kelurahan(old('id_kecamatan')) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kelurahan') == $item->id)>
                                                            {{ $item->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_kelurahan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Surat Pengantar RT/RW
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
    <script>
        $(function() {
            $('select[name="id_provinsi"]').on("change", function() {
                $.get("{{ route('wilayah') }}", {
                    id_provinsi: $(this).val()
                }, function(data, status) {
                    $('select[name="id_kab_kota"]').empty().append(
                        '<option selected disabled>Kabupaten/Kota</option>');
                    $('select[name="id_kecamatan"]').empty().append(
                        '<option selected disabled>Kecamatan</option>');
                    $('select[name="id_kelurahan"]').empty().append(
                        '<option selected disabled>Kelurahan</option>');
                    $.each(data, function(key, value) {
                        $('select[name="id_kab_kota"]').append('<option value="' + value
                            .id + '">' + value.nama + '</option>');
                    });
                });
            });
            $('select[name="id_kab_kota"]').on("change", function() {
                $.get("{{ route('wilayah') }}", {
                    id_kab_kota: $(this).val()
                }, function(data, status) {
                    $('select[name="id_kecamatan"]').empty().append(
                        '<option selected disabled>Kecamatan</option>');
                    $('select[name="id_kelurahan"]').empty().append(
                        '<option selected disabled>Kelurahan</option>');
                    $.each(data, function(key, value) {
                        $('select[name="id_kecamatan"]').append('<option value="' + value
                            .id + '">' + value.nama + '</option>');
                    });
                });
            });
            $('select[name="id_kecamatan"]').on("change", function() {
                $.get("{{ route('wilayah') }}", {
                    id_kecamatan: $(this).val()
                }, function(data, status) {
                    $('select[name="id_kelurahan"]').empty().append(
                        '<option selected disabled>Kelurahan</option>');
                    $.each(data, function(key, value) {
                        $('select[name="id_kelurahan"]').append('<option value="' + value
                            .id + '">' + value.nama + '</option>');
                    });
                });
            });
        });
    </script>
    {!! JsValidator::formRequest('App\Http\Requests\User\Surat\StoreRequest', '#form_submit') !!}
@endpush
