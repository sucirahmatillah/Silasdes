<?php $__env->startSection('title', 'Surat'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-status-top bg-primary"></div>
                <div class="card-header">
                    <h3 class="card-title">
                        Pengajuan Surat
                    </h3>
                    <div class="card-actions">
                        <a class="btn-link text-primary mx-2" href="<?php echo e(route('penduduk.surat.new')); ?>">
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
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-muted">
                                            <?php echo e($loop->iteration); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->no_surat ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->jenisSurat->nama ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->tanggal_surat ? date_format(date_create($item->tanggal_surat), 'd-m-Y') : '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($item->statusSurat->nama ?? '-'); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php if($item->keterangan): ?>
                                                <?php echo e($item->keterangan); ?>

                                            <?php else: ?>
                                                <?php echo e($item->statusSurat->keterangan ?? '-'); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a class="btn-link text-success"
                                                href="<?php echo e(route('penduduk.surat.show', $item)); ?>">
                                                Detail
                                            </a>
                                        </td>
                                        <td>
                                            <?php if($item->id_status_surat != 4): ?>
                                                <a class="btn-link text-info"
                                                    href="<?php echo e(route('penduduk.surat.edit', [
                                                        'jenis_surat' => $item->id_jenis_surat,
                                                        'surat' => $item,
                                                    ])); ?>">
                                                    Ubah
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($item->id_status_surat != 4): ?>
                                                <form action="<?php echo e(route('penduduk.surat.destroy', $item)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <a class="btn-link text-danger btn_delete"
                                                        href="<?php echo e(route('penduduk.surat.destroy', $item)); ?>"
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

<?php echo $__env->make('penduduk.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/surat/index.blade.php ENDPATH**/ ?>