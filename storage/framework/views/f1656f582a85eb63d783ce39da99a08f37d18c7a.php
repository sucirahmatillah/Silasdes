<?php $__env->startSection('title', 'Persetujuan'); ?>

<?php $__env->startSection('content'); ?>
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
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show-persetujuan')): ?>
                                                <a class="btn-link text-success"
                                                    href="<?php echo e(route('user.persetujuan.show', $item)); ?>">
                                                    Detail
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('setujui-persetujuan')): ?>
                                                <form action="<?php echo e(route('user.persetujuan.setujui', $item)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('post'); ?>
                                                    <a class="btn-link text-info btn_persetujuan"
                                                        href="<?php echo e(route('user.persetujuan.setujui', $item)); ?>"
                                                        data-item="<?php echo e($item->no_surat); ?>">
                                                        Setujui
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/user/persetujuan/index.blade.php ENDPATH**/ ?>