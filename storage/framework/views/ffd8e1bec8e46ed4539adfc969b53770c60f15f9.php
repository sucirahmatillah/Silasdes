<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body p-2 text-center">
                            <div class="text-end text-red">
                                <span class="text-red d-inline-flex align-items-center lh-1"></span>
                            </div>
                            <div class="h1 m-0"><?php echo e($total_penduduk ?? '0'); ?></div>
                            <div class="text-muted mb-3">Total Penduduk</div>
                        </div>
                    </div>
                </div>
                <?php $__currentLoopData = jenisSurat(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-red">
                                    <span class="text-red d-inline-flex align-items-center lh-1"></span>
                                </div>
                                <div class="h1 m-0"><?php echo e(totalSurat($item) ?? '0'); ?></div>
                                <div class="text-muted mb-3"><?php echo e($item->nama ?? '-'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/user/home.blade.php ENDPATH**/ ?>