@extends('user.layouts.main')

@section('title', 'Ubah Password')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-lg-3 col-md-3 col-12 d-sm-none d-md-block d-none d-sm-block">
                    <div class="d-flex py-1 align-items-center mb-3">
                        <img src="{{ Avatar::create($user->nama)->toBase64() }}" class="avatar me-2" />
                        <div class="flex-fill">
                            <div class="font-weight-medium">
                                {{ $user->nama }}
                            </div>
                            <div class="text-muted">
                                {{ $user->email }}
                            </div>
                        </div>
                    </div>
                    <div class="list-group list-group-transparent mb-3 pt-3 border-top">
                        <a class="list-group-item list-group-item-action d-flex align-items-center"
                            href="{{ route('user.account.profile.edit') }}">
                            Profil
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center active"
                            href="{{ route('user.account.password.edit') }}">
                            Ubah Password
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <form id="form_submit" action="{{ route('user.account.password.update') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-status-top bg-primary"></div>
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="card-title mb-1">
                                            Password
                                        </h3>
                                        <div class="text-muted">
                                            Untuk keamanan akun Anda, mohon untuk tidak menyebarkan password Anda ke orang
                                            lain.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Password Saat Ini
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="password" name="current_password"
                                            class="form-control @error('current_password') is-invalid @enderror" />
                                        @error('current_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Password Baru
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Kata sandi harus terdiri dari 8-20 karakter, berisi huruf dan angka, dan
                                            tidak boleh mengandung spasi, karakter khusus, atau emoji.
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Konfirmasi Password Baru
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="password" name="password_confirmation" class="form-control" />
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
    {!! JsValidator::formRequest('App\Http\Requests\User\Account\PasswordUpdateRequest', '#form_submit') !!}
@endpush
