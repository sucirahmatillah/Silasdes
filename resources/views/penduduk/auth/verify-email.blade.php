@extends('penduduk.layouts.auth')

@section('title', 'Verifikasi Email')

@section('content')
    <form id="form_submit" class="card card-md" action="{{ route('penduduk.verification.send') }}" method="POST">
        @csrf
        <div class="card-body">
            <h1 class="text-center">Verifikasi Email</h1>
            <p class="text-center">
                Link verifikasi telah dikirimkan ke Email Anda.<br>
                Segera cek email dan klik tombol "Verifikasi Email" agar dapat menggunakan akun Anda.
            </p>
            @if (session()->has('success'))
                <p class=" text-center text-success fw-bold">{{ session('success') }}</p>
            @endif
            <div class="form-footer d-grid gap-3">
                <button type="submit" class="btn btn-primary">Kirim Ulang Link Verifikasi</button>
                <a href="{{ route('penduduk.logout') }}" class="btn btn-outline-danger"
                    onclick="event.preventDefault();document.getElementById('form_logout').submit();">
                    Logout
                </a>
            </div>
        </div>
    </form>
    <form id="form_logout" action="{{ route('penduduk.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection
