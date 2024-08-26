@extends('user.layouts.main')

@section('title', 'Surat')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Data Surat
                    </h3>
                    <div class="card-actions">
                        @can('create-surat')
                            <div class="btn-group mx-2">
                                <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tambah
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    @foreach (jenisSurat() as $item)
                                        <li>
                                            <a href="{{ route('user.surat.create', $item) }}" class="dropdown-item">
                                                {{ $item->nama ?? '-' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endcan
                    </div>
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
                                    <th>Status</th>
                                    <th class="w-1"></th>
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
                                            {{ $item->jenisSurat->nama ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->no_surat ?? '-' }}
                                        </td>
                                        <td class="text-muted">
                                            {{ $item->penduduk->nik ?? '-' }}<br>
                                            <strong>{{ $item->penduduk->nama ?? '-' }}</strong>
                                        </td>
                                        <td class="text-muted">
                                            @can('status-surat')
                                                @if ($item->id_status_surat != 4)
                                                    <a href="#" id="btn-status" data-bs-toggle="modal"
                                                        data-bs-target="#modal-status-{{ $item->id }}">
                                                        {{ $item->statusSurat->nama ?? '-' }}
                                                    </a>
                                                    <div class="modal modal-blur fade" id="modal-status-{{ $item->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered"
                                                            role="document">
                                                            <form class="modal-content"
                                                                action="{{ route('user.surat.status', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('post')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Status Surat</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-selectgroup-boxes row mb-3">
                                                                        @foreach (statusSurat() as $status)
                                                                            <div class="col-lg-6 mb-3">
                                                                                <label class="form-selectgroup-item">
                                                                                    <input type="radio" name="id_status_surat"
                                                                                        value="{{ $status->id }}"
                                                                                        class="form-selectgroup-input"
                                                                                        {{ $item->id_status_surat == $status->id ? 'checked' : '' }}>
                                                                                    <span
                                                                                        class="form-selectgroup-label d-flex align-items-center p-3">
                                                                                        <span class="me-3">
                                                                                            <span
                                                                                                class="form-selectgroup-check"></span>
                                                                                        </span>
                                                                                        <span
                                                                                            class="form-selectgroup-label-content">
                                                                                            <span
                                                                                                class="form-selectgroup-title strong mb-1">
                                                                                                {{ $status->nama ?? '-' }}
                                                                                            </span>
                                                                                            <span class="d-block text-muted">
                                                                                                {{ $status->keterangan ?? '-' }}
                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <label class="form-label">
                                                                                    Keterangan
                                                                                </label>
                                                                                <textarea name="keterangan" class="form-control" rows="3">{{ $item->keterangan ?? '' }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="#" class="btn btn-link link-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        Batal
                                                                    </a>
                                                                    <button type="submit" class="btn btn-primary ms-auto">
                                                                        Simpan
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @else
                                                    {{ $item->statusSurat->nama ?? '-' }}
                                                @endif
                                            @endcan
                                        </td>
                                        <td>
                                            @can('print-surat')
                                                @if ($item->id_status_surat == 4)
                                                    <a class="btn-link text-secondary"
                                                        href="{{ route('user.surat.print', $item) }}" target="_blank">
                                                        Print
                                                    </a>
                                                @endif
                                            @endcan
                                        </td>
                                        <td>
                                            @can('show-surat')
                                                <a class="btn-link text-success" href="{{ route('user.surat.show', $item) }}">
                                                    Detail
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('edit-surat')
                                                <a class="btn-link text-info"
                                                    href="{{ route('user.surat.edit', [
                                                        'jenis_surat' => $item->id_jenis_surat,
                                                        'surat' => $item,
                                                    ]) }}">
                                                    Ubah
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('destroy-surat')
                                                <form action="{{ route('user.surat.destroy', $item) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="{{ route('user.surat.destroy', $item) }}"
                                                        data-item="{{ $item->no_surat }}">
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
