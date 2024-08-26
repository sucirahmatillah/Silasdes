@extends('user.layouts.main')

@section('title', 'Persetujuan')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Persetujuan
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
                                    <th>Pemohon</th>
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
                                            {{ $item->jenisSurat->nama ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->no_surat ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->penduduk->nik ?? '-' }}<br>
                                            <strong>{{ $item->penduduk->nama ?? '-' }}</strong>
                                        </td>
                                        <td>
                                            @can('show-persetujuan')
                                                <a class="btn-link text-success"
                                                    href="{{ route('user.persetujuan.show', $item) }}">
                                                    Detail
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('setujui-persetujuan')
                                                <form action="{{ route('user.persetujuan.setujui', $item) }}" method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <a class="btn-link text-info btn_persetujuan"
                                                        href="{{ route('user.persetujuan.setujui', $item) }}"
                                                        data-item="{{ $item->no_surat }}">
                                                        Setujui
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

            $('.btn_persetujuan').click(function(event) {
                var item = $(this).attr('data-item');
                var form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: "Anda akan menyetujui",
                    text: item,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, setujui',
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
