@extends('user.layouts.auth')

@section('title', 'Atur Ulang Password')

@section('content')
    <form id="form_submit" class="card card-md" action="{{ route('user.password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $password_reset->token }}">
        <div class="card-body">
            <h2 class="card-title text-center">Reset Password</h2>
            <div class="mb-2">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') ?? $password_reset->email }}" />
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="password">Password Baru</label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="password_confirmation">Konfirmasi Password Baru</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
            </div>
            <div class="form-footer d-grid gap-2">
                <button type="submit" class="btn btn-primary">Atur Ulang Password</button>
            </div>
            @if (Route::has('user.login'))
                <hr>
                <div class="text-center text-muted">
                    Sudah punya akun?
                    <a href="{{ route('user.login') }}" tabindex="-1">Masuk di sini</a>
                </div>
            @endif
        </div>
    </form>
@endsection

@push('script')
    {!! JsValidator::formRequest('App\Http\Requests\User\Auth\ResetPasswordRequest', '#form_submit') !!}
@endpush
