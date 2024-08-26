@extends('user.layouts.main')

@section('title', 'Penduduk')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Data Penduduk
                    </h3>
                    <div class="card-actions">
                        @can('create-penduduk')
                            <a class="btn-link text-primary mx-2" href="{{ route('user.penduduk.create') }}">
                                Tambah
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    <div id="table-default" class="table-responsive">
                        <table class="table table-vcenter" id="dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="w-1">No.</th>
                                    <th>NIK/Nama</th>
                                    <th>No. KK</th>
                                    <th>RT/RW</th>
                                    <th>Alamat</th>
                                    <th>SHDK</th>
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
                                            {{ $item->nik ?? '-' }}<br>
                                            <strong>{{ $item->nama ?? '-' }}</strong>
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->no_kk ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->rt ?? '-' }}/{{ $item->rw ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->alamat ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->shdk->nama ?? '-' }}
                                        </td>
                                        <td>
                                            @can('show-penduduk')
                                                <a class="btn-link text-success"
                                                    href="{{ route('user.penduduk.show', $item) }}">
                                                    Detail
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('edit-penduduk')
                                                <a class="btn-link text-info" href="{{ route('user.penduduk.edit', $item) }}">
                                                    Ubah
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('destroy-penduduk')
                                                <form action="{{ route('user.penduduk.destroy', $item) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="{{ route('user.penduduk.destroy', $item) }}"
                                                        data-item="{{ $item->nama }}">
                                                        Hapus
                                                    </a>
                                                </form>
                                            @endcan
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
