@extends('user.layouts.main')

@section('title', 'Detail Penduduk')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title mb-1">
                                        Detail
                                    </h3>
                                    <div class="text-muted">
                                        Informasi Data Penduduk
                                    </div>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a class="btn-link text-info mx-2" href="{{ route('user.penduduk.edit', $penduduk) }}">
                                    Ubah
                                </a>
                                <a class="btn-link text-warning mx-2" href="{{ route('user.penduduk.index') }}">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    No. Kartu Keluarga
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->no_kk ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    NIK
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->nik ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tempat Lahir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->tempat_lahir ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Lahir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->tanggal_lahir ? date_format(date_create($penduduk->tanggal_lahir), 'd-m-Y') : '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jenis Kelamin
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->jenisKelamin->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Golongan Darah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->golonganDarah->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Alamat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->alamat ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    RT/RW
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->rt ?? '-' }}/{{ $penduduk->rw ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kode POS
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->kode_pos ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kelurahan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->kelurahan->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kecamatan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->kecamatan->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kabupaten/Kota
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->kabKota->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Provinsi
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->provinsi->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Agama
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->agama->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Status Perkawinan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->statusPerkawinan->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Pendidikan Terakhir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->pendidikan->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Pekerjaan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->pekerjaan->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kewarganegaraan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->kewarganegaraan->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Status Hubungan Dalam Keluarga
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->shdk->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    NIK Ibu
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->nik_ibu ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama Ibu
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->nama_ibu ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    NIK Ayah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->nik_ayah ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama Ayah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->nama_ayah ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Telepon
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->telepon ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Email
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $penduduk->email ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kartu Keluarga (Scan/Foto)
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($penduduk->file_kk)
                                        <a href="{{ $penduduk->file_kk }}" target="_blank">
                                            Lihat
                                        </a>
                                    @else
                                        <span class="text-warning">Belum Upload</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kartu Tanda Penduduk (Scan/Foto)
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($penduduk->file_ktp)
                                        <a href="{{ $penduduk->file_ktp }}" target="_blank">
                                            Lihat
                                        </a>
                                    @else
                                        <span class="text-warning">Belum Upload</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
