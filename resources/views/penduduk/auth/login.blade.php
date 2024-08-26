@extends('penduduk.layouts.auth')

@section('title', 'Masuk')

@section('content')
    <form id="form_submit" class="card card-md" action="{{ route('penduduk.authenticate') }}" method="POST">
        @csrf
        <div class="card-body">
            <h1 class="text-center">Masuk Akun</h1>
            <p class="text-center text-muted">Silahkan masuk ke akun Anda.</p>
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
                    @if (Route::has('penduduk.password.request'))
                        <span class="form-label-description">
                            <a href="{{ route('penduduk.password.request') }}" tabindex="-1">
                                Lupa password
                            </a>
                        </span>
                    @endif
                </label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input" @checked(old('remember')) />
                    <span class="form-check-label">Ingat Saya</span>
                </label>
            </div>
            <div class="form-footer d-grid gap-2">
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
            @if (Route::has('penduduk.register'))
                <hr>
                <div class="text-center text-muted">
                    Belum punya akun?
                    <a href="{{ route('penduduk.register') }}" tabindex="-1">Daftarkan diri Anda</a>
                </div>
            @endif
        </div>
    </form>
@endsection

@push('script')
    {!! JsValidator::formRequest('App\Http\Requests\Penduduk\Auth\LoginRequest', '#form_submit') !!}
@endpush
