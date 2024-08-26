@extends('penduduk.layouts.main')

@section('title', 'Profil')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-lg-3 col-md-3 col-12 d-sm-none d-md-block d-none d-sm-block">
                    <div class="d-flex py-1 align-items-center mb-3">
                        <img src="{{ Avatar::create($penduduk->nama)->toBase64() }}" class="avatar me-2" />
                        <div class="flex-fill">
                            <div class="font-weight-medium">
                                {{ $penduduk->nama }}
                            </div>
                            <div class="text-muted">
                                {{ $penduduk->email }}
                            </div>
                        </div>
                    </div>
                    <div class="list-group list-group-transparent mb-3 pt-3 border-top">
                        <a class="list-group-item list-group-item-action d-flex align-items-center active"
                            href="{{ route('penduduk.account.profile.edit') }}">
                            Profil
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center"
                            href="{{ route('penduduk.account.password.edit') }}">
                            Ubah Password
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <form id="form_submit" action="{{ route('penduduk.account.profile.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card">
                            <div class="card-status-top bg-primary"></div>
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="card-title mb-1">
                                            Profil
                                        </h3>
                                        <div class="text-muted">
                                            Atur akun Anda untuk mengontrol, melindungi dan mengamankan akun.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        No. Kartu Keluarga
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="no_kk"
                                            class="form-control @error('no_kk') is-invalid @enderror"
                                            value="{{ old('no_kk') ?? $penduduk->no_kk }}" />
                                        @error('no_kk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        NIK
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nik"
                                            class="form-control @error('nik') is-invalid @enderror"
                                            value="{{ old('nik') ?? $penduduk->nik }}" />
                                        @error('nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') ?? $penduduk->nama }}" />
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Nama lengkap sesuai dengan Surat Kenal
                                            Lahir atau Akta Kelahiran atau sesuai dengan nama pemberian orang tua,
                                            tanpa
                                            pencantuman gelar akademis, gelar kebangsawanan atau gelar agama.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Tempat Lahir
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="tempat_lahir"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            value="{{ old('tempat_lahir') ?? $penduduk->tempat_lahir }}" />
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Kabupaten/Kota tempat lahir sesuai dengan yang tercantum dalam
                                            Surat Kenal Lahir atau Akta Kelahiran.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Tanggal Lahir
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            value="{{ old('tanggal_lahir') ?? $penduduk->tanggal_lahir }}" />
                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Tanggal, bulan dan tahun lahir.
                                        </small>
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
                                                    value="{{ $item->id }}" @checked(old('id_jenis_kelamin') == $item->id || $penduduk->id_jenis_kelamin == $item->id) />
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
                                        Golongan Darah
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select class="form-select @error('id_golongan_darah') is-invalid @enderror"
                                            name="id_golongan_darah">
                                            <option value=""></option>
                                            @foreach (golonganDarah() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_golongan_darah') == $item->id || $penduduk->id_golongan_darah == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_golongan_darah')
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
                                                    value="{{ old('alamat') ?? $penduduk->alamat }}" />
                                                @error('alamat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-hint">
                                                    Jalan atau kampung/dusun/dukuh atau yang sejenisnya,
                                                    dilengkapi
                                                    dengan nomor rumah (jika ada).
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-4 mb-3">
                                                <select class="form-select @error('rt') is-invalid @enderror"
                                                    name="rt">
                                                    <option value="">RT</option>
                                                    @foreach (number() as $item)
                                                        <option value="{{ $item }}" @selected(old('rt') == $item || $penduduk->rt == $item)>
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
                                                        <option value="{{ $item }}" @selected(old('rw') == $item || $penduduk->rw == $item)>
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
                                                    value="{{ old('kode_pos') ?? $penduduk->kode_pos }}" />
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
                                                        <option value="{{ $item->id }}" @selected(old('id_provinsi') == $item->id || $penduduk->id_provinsi == $item->id)>
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
                                                    @foreach (kabKota(old('id_provinsi') ?? $penduduk->id_provinsi) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kab_kota') == $item->id || $penduduk->id_kab_kota == $item->id)>
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
                                                    @foreach (kecamatan(old('id_kab_kota') ?? $penduduk->id_kab_kota) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kecamatan') == $item->id || $penduduk->id_kecamatan == $item->id)>
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
                                                    @foreach (kelurahan(old('id_kecamatan') ?? $penduduk->id_kecamatan) as $item)
                                                        <option value="{{ $item->id }}" @selected(old('id_kelurahan') == $item->id || $penduduk->id_kelurahan == $item->id)>
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
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Agama
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="id_agama"
                                            class="form-select @error('id_agama') is-invalid @enderror">
                                            <option value=""></option>
                                            @foreach (agama() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_agama') == $item->id || $penduduk->id_agama == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_agama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Status Perkawinan
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="id_status_perkawinan"
                                            class="form-select @error('id_status_perkawinan') is-invalid @enderror">
                                            <option value=""></option>
                                            @foreach (statusPerkawinan() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_status_perkawinan') == $item->id || $penduduk->id_status_perkawinan == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_status_perkawinan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Pendidikan Terakhir
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="id_pendidikan"
                                            class="form-select @error('id_pendidikan') is-invalid @enderror">
                                            <option value=""></option>
                                            @foreach (pendidikan() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_pendidikan') == $item->id || $penduduk->id_pendidikan == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_pendidikan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Pekerjaan
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="id_pekerjaan"
                                            class="form-select @error('id_pekerjaan') is-invalid @enderror">
                                            <option value=""></option>
                                            @foreach (pekerjaan() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_pekerjaan') == $item->id || $penduduk->id_pekerjaan == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_pekerjaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Kewarganegaraan
                                    </div>
                                    <div class="col-md-9 col-12">
                                        @foreach (kewarganegaraan() as $item)
                                            <label class="form-check form-check-inline mt-2">
                                                <input type="radio" name="id_kewarganegaraan"
                                                    class="form-check-input @error('id_kewarganegaraan') is-invalid @enderror"
                                                    value="{{ $item->id }}" @checked(old('id_kewarganegaraan') == $item->id || $penduduk->id_kewarganegaraan == $item->id) />
                                                <span class="form-check-label">
                                                    {{ $item->nama }}
                                                </span>
                                            </label>
                                        @endforeach
                                        @error('id_kewarganegaraan')
                                            <small class="text-danger d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Status Hubungan Dalam Keluarga
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="id_shdk"
                                            class="form-select @error('id_shdk') is-invalid @enderror">
                                            <option value=""></option>
                                            @foreach (shdk() as $item)
                                                <option value="{{ $item->id }}" @selected(old('id_shdk') == $item->id || $penduduk->id_shdk == $item->id)>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_shdk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Status hubungan keluarga dalam hubungannya
                                            dengan Kepala Keluarga.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        NIK Ibu
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nik_ibu"
                                            class="form-control @error('nik_ibu') is-invalid @enderror"
                                            value="{{ old('nik_ibu') ?? $penduduk->nik_ibu }}" />
                                        @error('nik_ibu')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Nomor Induk Kependudukan ibu kandung.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama Ibu Kandung
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama_ibu"
                                            class="form-control @error('nama_ibu') is-invalid @enderror"
                                            value="{{ old('nama_ibu') ?? $penduduk->nama_ibu }}" />
                                        @error('nama_ibu')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Nama ibu kandung secara lengkap sesuai dengan Surat Kenal
                                            Lahir atau Akta Kelahiran atau sesuai dengan nama pemberian orang tua,
                                            tanpa
                                            pencantuman gelar akademis, gelar kebangsawanan atau gelar agama.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        NIK Ayah
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nik_ayah"
                                            class="form-control @error('nik_ayah') is-invalid @enderror"
                                            value="{{ old('nik_ayah') ?? $penduduk->nik_ayah }}" />
                                        @error('nik_ayah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Nomor Induk Kependudukan ayah kandung.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Nama Ayah Kandung
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama_ayah"
                                            class="form-control @error('nama_ayah') is-invalid @enderror"
                                            value="{{ old('nama_ayah') ?? $penduduk->nama_ayah }}" />
                                        @error('nama_ayah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Nama ayah kandung secara lengkap sesuai dengan Surat Kenal
                                            Lahir atau Akta Kelahiran atau sesuai dengan nama pemberian orang tua,
                                            tanpa
                                            pencantuman gelar akademis, gelar kebangsawanan atau gelar agama.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Telepon
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="telepon"
                                            class="form-control @error('telepon') is-invalid @enderror"
                                            value="{{ old('telepon') ?? $penduduk->telepon }}" />
                                        @error('telepon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Email
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" autocomplete="on"
                                            value="{{ old('email') ?? $penduduk->email }}" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Kartu Keluarga (Scan/Foto)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="file_kk"
                                            class="form-control @error('file_kk') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('file_kk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Ekstensi: PNG, JPG | Max: 2MB.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Kartu Tanda Penduduk (Scan/Foto)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="file_ktp"
                                            class="form-control @error('file_ktp') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('file_ktp')
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
    {!! JsValidator::formRequest('App\Http\Requests\Penduduk\Account\ProfileUpdateRequest', '#form_submit') !!}
@endpush
