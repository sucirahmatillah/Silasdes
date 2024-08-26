@extends('penduduk.layouts.main')

@section('title', 'Surat')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Pengajuan Surat
                    </h3>
                    <div class="card-actions">
                        <a class="btn-link text-primary mx-2" href="{{ route('penduduk.surat.new') }}">
                            Buat Pengajuan Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="table-default" class="table-responsive">
                        <table class="table table-vcenter" id="dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="w-1">No.</th>
                                    <th>No. Surat</th>
                                    <th>Surat</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th class="w-1"></th>
                                    <th class="w-1"></th>
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
                                            {{ $item->no_surat ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->jenisSurat->nama ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->tanggal_surat ? date_format(date_create($item->tanggal_surat), 'd-m-Y') : '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->statusSurat->nama ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            @if ($item->keterangan)
                                                {{ $item->keterangan }}
                                            @else
                                                {{ $item->statusSurat->keterangan ?? '-' }}
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn-link text-success"
                                                href="{{ route('penduduk.surat.show', $item) }}">
                                                Detail
                                            </a>
                                        </td>
                                        <td>
                                            @if ($item->id_status_surat != 4)
                                                <a class="btn-link text-info"
                                                    href="{{ route('penduduk.surat.edit', [
                                                        'jenis_surat' => $item->id_jenis_surat,
                                                        'surat' => $item,
                                                    ]) }}">
                                                    Ubah
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->id_status_surat != 4)
                                                <form action="{{ route('penduduk.surat.destroy', $item) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="{{ route('penduduk.surat.destroy', $item) }}"
                                                        data-item="{{ $item->no_surat }}">
                                                        Hapus
                                                    </a>
                                                </form>
                                            @endif
                                        </td>
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

@push('script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

            $('.btn_delete').click(function(event) {
                var item = $(this).attr('data-item');
                var form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: "Anda akan menghapus",
                    text: item,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
