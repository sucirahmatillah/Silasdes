<?php $__env->startSection('title', 'Cetak Surat'); ?>

<?php $__env->startSection('content'); ?>
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
                                            <?php echo e($item->tanggal_surat ? date_format(date_create($item->tanggal_surat), 'd-m-Y') : '-'); ?>

                                        </td>
                                        <?php if($item->id_status_surat == 4): ?>
                                            <td>
                                                <a class="btn-link text-info"
                                                    href="<?php echo e(route('penduduk.cetak.print', $item)); ?>" target="_blank">
                                                    Print
                                                </a>
                                            </td>
                                        <?php endif; ?>
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

<?php echo $__env->make('penduduk.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/cetak/index.blade.php ENDPATH**/ ?>