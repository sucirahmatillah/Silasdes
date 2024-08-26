@extends('user.layouts.auth')

@section('title', 'Lupa Password')

@section('content')
    <form id="form_submit" class="card card-md" action="{{ route('user.password.email') }}" method="POST">
        @csrf
        <div class="card-body">
            <h1 class="text-center">Lupa Password</h1>
            <p class="text-center text-muted">
                Kami akan mengirim instruksi untuk mengganti password. Silahkan masukkan email Anda.
            </p>
            @if (Session::has('success'))
                <p class=" text-center text-success fw-bold">{{ session('success') }}</p>
            @endif
            <div class="mb-2">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" autocomplete="on"
                    value="{{ old('email') }}" />
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-footer d-grid gap-2">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="{{ route('user.login') }}" class="btn btn-outline-primary">Kembali</a>
            </div>
        </div>
    </form>
@endsection

@push('script')
    {!! JsValidator::formRequest('App\Http\Requests\User\Auth\ForgotPasswordRequest', '#form_submit') !!}
@endpush
