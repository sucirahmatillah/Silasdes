@extends('user.layouts.main')

@section('title', 'Pengguna')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Data Pengguna
                    </h3>
                    <div class="card-actions">
                        @can('create-user')
                            <a class="btn-link text-primary mx-2" href="{{ route('user.pengguna.create') }}">
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
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
                                            {{ $item->nama ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->email ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->roles->pluck('name')[0] ?? '-' }}
                                        </td>
                                        <td>
                                            @can('edit-pengguna')
                                                <a class="btn-link text-info" href="{{ route('user.pengguna.edit', $item) }}">
                                                    Ubah
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('destroy-pengguna')
                                                <form action="{{ route('user.pengguna.destroy', $item) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="{{ route('user.pengguna.destroy', $item) }}"
                                                        data-item="{{ $item->nama ?? '-' }}">
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
