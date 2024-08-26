@extends('penduduk.layouts.auth')

@section('title', 'Pendaftaran')

@section('content')
    <form id="form_submit" class="card card-md" action="{{ route('penduduk.registration') }}" method="POST">
        @csrf
        <div class="card-body">
            <h1 class="text-center">Pendaftaran</h1>
            <p class="text-center text-muted">Mohon isi data berikut dengan benar.</p>
            <div class="mb-2">
                <label class="form-label" for="nik">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror"
                    value="{{ old('nik') }}" />
                @error('nik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}" />
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" autocomplete="on"
                    value="{{ old('email') }}" />
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="password">
                    Password
                </label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="password_confirmation">
                    Konfirmasi Password
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
            </div>
            <div class="mb-0">
                <label class="form-check" for="terms">
                    <input type="checkbox" name="terms" id="terms"
                        class="form-check-input @error('terms') is-invalid @enderror" />
                    <small class="form-check-label">
                        Saya menyetujui
                        <a href="#">Syarat dan Ketentuan</a>&nbsp;dan&nbsp;<a href="#">Kebijakan
                            Privasi</a>
                        yang berlaku
                    </small>
                </label>
                @error('terms')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-footer d-grid gap-2">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            @if (Route::has('penduduk.login'))
                <hr>
                <div class="text-center text-muted">
                    Sudah punya akun?
                    <a href="{{ route('penduduk.login') }}" tabindex="-1">Masuk di sini</a>
                </div>
            @endif
        </div>
    </form>
@endsection

@push('script')
    {!! JsValidator::formRequest('App\Http\Requests\Penduduk\Auth\RegisterRequest', '#form_submit') !!}
@endpush
