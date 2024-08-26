@extends('user.layouts.main')

@section('title', 'Kantor Desa')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <form id="form_submit" action="{{ route('user.kantor-desa.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card">
                            <div class="card-status-top bg-primary"></div>
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="card-title mb-1">
                                            Pengaturan Kantor Desa
                                        </h3>
                                        <div class="text-muted">
                                            Input dengan tanda <strong class="text-danger">*</strong> wajib diisi!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Kode
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="kode"
                                            class="form-control @error('kode') is-invalid @enderror"
                                            value="{{ old('kode') ?? ($kantor_desa ? $kantor_desa->kode : '') }}" />
                                        @error('kode')
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
                                                    value="{{ old('alamat') ?? ($kantor_desa ? $kantor_desa->alamat : '') }}" />
                                                @error('alamat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-hint">
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-4 mb-3">
                                                <select class="form-select @error('rt') is-invalid @enderror"
                                                    name="rt">
                                                    <option value="">RT</option>
                                                    @foreach (number() as $item)
                                                        <option value="{{ $item }}" @selected(old('rt') == $item || ($kantor_desa ? $kantor_desa->rt == $item : ''))>
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
                                                        <option value="{{ $item }}" @selected(old('rw') == $item || ($kantor_desa ? $kantor_desa->rw == $item : ''))>
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
                                                    placeholder="Kode POS"
                                                    value="{{ old('kode_pos') ?? ($kantor_desa ? $kantor_desa->kode_pos : '') }}" />
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
                                                        <option value="{{ $item->id }}" @selected(old('id_provinsi') == $item->id || ($kantor_desa ? $kantor_desa->id_provinsi == $item->id : ''))>
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
                                                    @foreach (kabKota(old('id_provinsi') ?? ($kantor_desa ? $kantor_desa->id_provinsi : '')) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kab_kota') == $item->id || ($kantor_desa ? $kantor_desa->id_kab_kota == $item->id : ''))>
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
                                                    @foreach (kecamatan(old('id_kab_kota') ?? ($kantor_desa ? $kantor_desa->id_kab_kota : '')) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kecamatan') == $item->id || ($kantor_desa ? $kantor_desa->id_kecamatan == $item->id : ''))>
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
                                                    @foreach (kelurahan(old('id_kecamatan') ?? ($kantor_desa ? $kantor_desa->id_kecamatan : '')) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kelurahan') == $item->id || $kantor_desa->id_kelurahan == $item->id)>
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
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Telepon
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="telepon"
                                            class="form-control @error('telepon') is-invalid @enderror"
                                            value="{{ old('telepon') ?? ($kantor_desa ? $kantor_desa->telepon : '') }}" />
                                        @error('telepon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Email
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') ?? ($kantor_desa ? $kantor_desa->email : '') }}" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Website
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="website"
                                            class="form-control @error('website') is-invalid @enderror"
                                            value="{{ old('website') ?? ($kantor_desa ? $kantor_desa->website : '') }}" />
                                        @error('website')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Logo
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="logo"
                                            class="form-control @error('logo') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('logo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama Kepala Desa
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama_kepala_desa"
                                            class="form-control @error('nama_kepala_desa') is-invalid @enderror"
                                            value="{{ old('nama_kepala_desa') ?? ($kantor_desa ? $kantor_desa->nama_kepala_desa : '') }}" />
                                        @error('nama_kepala_desa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        NIP Kepala Desa
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nip_kepala_desa"
                                            class="form-control @error('nip_kepala_desa') is-invalid @enderror"
                                            value="{{ old('nip_kepala_desa') ?? ($kantor_desa ? $kantor_desa->nip_kepala_desa : '') }}" />
                                        @error('nip_kepala_desa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        TTD Kepala Desa
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="ttd_kepala_desa"
                                            class="form-control @error('ttd_kepala_desa') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('ttd_kepala_desa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
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
                $.get("{{ route('user.kantor-desa.index') }}", {
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
                $.get("{{ route('user.kantor-desa.index') }}", {
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
                $.get("{{ route('user.kantor-desa.index') }}", {
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
    {!! JsValidator::formRequest('App\Http\Requests\User\KantorDesa\UpdateRequest', '#form_submit') !!}
@endpush
