<?php $__env->startSection('title', 'Surat'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Data Surat
                    </h3>
                    <div class="card-actions">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-surat')): ?>
                            <div class="btn-group mx-2">
                                <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tambah
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <?php $__currentLoopData = jenisSurat(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('user.surat.create', $item)); ?>" class="dropdown-item">
                                                <?php echo e($item->nama ?? '-'); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
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
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-muted">
                                            <?php echo e($loop->iteration); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->jenisSurat->nama ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->no_surat ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->penduduk->nik ?? '-'); ?><br>
                                            <strong><?php echo e($item->penduduk->nama ?? '-'); ?></strong>
                                        </td>
                                        <td class="text-muted">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('status-surat')): ?>
                                                <?php if($item->id_status_surat != 4): ?>
                                                    <a href="#" id="btn-status" data-bs-toggle="modal"
                                                        data-bs-target="#modal-status-<?php echo e($item->id); ?>">
                                                        <?php echo e($item->statusSurat->nama ?? '-'); ?>

                                                    </a>
                                                    <div class="modal modal-blur fade" id="modal-status-<?php echo e($item->id); ?>"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered"
                                                            role="document">
                                                            <form class="modal-content"
                                                                action="<?php echo e(route('user.surat.status', $item->id)); ?>"
                                                                method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('post'); ?>
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Status Surat</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-selectgroup-boxes row mb-3">
                                                                        <?php $__currentLoopData = statusSurat(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <div class="col-lg-6 mb-3">
                                                                                <label class="form-selectgroup-item">
                                                                                    <input type="radio" name="id_status_surat"
                                                                                        value="<?php echo e($status->id); ?>"
                                                                                        class="form-selectgroup-input"
                                                                                        <?php echo e($item->id_status_surat == $status->id ? 'checked' : ''); ?>>
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
                                                                                                <?php echo e($status->nama ?? '-'); ?>

                                                                                            </span>
                                                                                            <span class="d-block text-muted">
                                                                                                <?php echo e($status->keterangan ?? '-'); ?>

                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div>
                                                                                <label class="form-label">
                                                                                    Keterangan
                                                                                </label>
                                                                                <textarea name="keterangan" class="form-control" rows="3"><?php echo e($item->keterangan ?? ''); ?></textarea>
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
                                                <?php else: ?>
                                                    <?php echo e($item->statusSurat->nama ?? '-'); ?>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('print-surat')): ?>
                                                <?php if($item->id_status_surat == 4): ?>
                                                    <a class="btn-link text-secondary"
                                                        href="<?php echo e(route('user.surat.print', $item)); ?>" target="_blank">
                                                        Print
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show-surat')): ?>
                                                <a class="btn-link text-success" href="<?php echo e(route('user.surat.show', $item)); ?>">
                                                    Detail
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-surat')): ?>
                                                <a class="btn-link text-info"
                                                    href="<?php echo e(route('user.surat.edit', [
                                                        'jenis_surat' => $item->id_jenis_surat,
                                                        'surat' => $item,
                                                    ])); ?>">
                                                    Ubah
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('destroy-surat')): ?>
                                                <form action="<?php echo e(route('user.surat.destroy', $item)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="<?php echo e(route('user.surat.destroy', $item)); ?>"
                                                        data-item="<?php echo e($item->no_surat); ?>">
                                                        Hapus
                                                    </a>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/user/surat/index.blade.php ENDPATH**/ ?>