<?php $__env->startSection('title', 'Penduduk'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Data Penduduk
                    </h3>
                    <div class="card-actions">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-penduduk')): ?>
                            <a class="btn-link text-primary mx-2" href="<?php echo e(route('user.penduduk.create')); ?>">
                                Tambah
                            </a>
                        <?php endif; ?>
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
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-muted">
                                            <?php echo e($loop->iteration); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->nik ?? '-'); ?><br>
                                            <strong><?php echo e($item->nama ?? '-'); ?></strong>
                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->no_kk ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->rt ?? '-'); ?>/<?php echo e($item->rw ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->alamat ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->shdk->nama ?? '-'); ?>

                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show-penduduk')): ?>
                                                <a class="btn-link text-success"
                                                    href="<?php echo e(route('user.penduduk.show', $item)); ?>">
                                                    Detail
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-penduduk')): ?>
                                                <a class="btn-link text-info" href="<?php echo e(route('user.penduduk.edit', $item)); ?>">
                                                    Ubah
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('destroy-penduduk')): ?>
                                                <form action="<?php echo e(route('user.penduduk.destroy', $item)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="<?php echo e(route('user.penduduk.destroy', $item)); ?>"
                                                        data-item="<?php echo e($item->nama); ?>">
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

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/user/penduduk/index.blade.php ENDPATH**/ ?>