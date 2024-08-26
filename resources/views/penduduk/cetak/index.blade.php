@extends('penduduk.layouts.main')

@section('title', 'Cetak Surat')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Cetak Surat
                    </h3>
                </div>
                <div class="card-body">
                    <div id="table-default" class="table-responsive">
                        <table class="table table-vcenter" id="dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="w-1">No.</th>
                                    <th>Jenis Surat</th>
                                    <th>No. Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-muted">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->jenisSurat->nama ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->no_surat ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->tanggal_surat ? date_format(date_create($item->tanggal_surat), 'd-m-Y') : '-' }}
                                        </td>
                                        @if ($item->id_status_surat == 4)
                                            <td>
                                                <a class="btn-link text-info"
                                                    href="{{ route('penduduk.cetak.print', $item) }}" target="_blank">
                                                    Print
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
