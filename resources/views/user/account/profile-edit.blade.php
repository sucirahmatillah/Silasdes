@extends('user.layouts.main')

@section('title', 'Profil')

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
                        <a class="list-group-item list-group-item-action d-flex align-items-center active"
                            href="{{ route('user.account.profile.edit') }}">
                            Profil
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center"
                            href="{{ route('user.account.password.edit') }}">
                            Ubah Password
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <form id="form_submit" action="{{ route('user.account.profile.update') }}" method="POST">
                        @csrf
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
                                        Nama
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') ?? $user->nama }}" />
                                        @error('nama')
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
                                            value="{{ old('email') ?? $user->email }}" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
    {!! JsValidator::formRequest('App\Http\Requests\User\Account\ProfileUpdateRequest', '#form_submit') !!}
@endpush
