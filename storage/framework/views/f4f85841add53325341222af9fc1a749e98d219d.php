<?php $__env->startSection('content'); ?>
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Selamat Datang
                    </div>
                    <h2 class="page-title">
                        <?php echo e(auth()->guard('penduduk')->user()->nama ?? '-'); ?>

                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="<?php echo e(route('penduduk.surat.new')); ?>" class="btn btn-primary">
                                Buat Pengajuan Baru
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <?php $__currentLoopData = jenisSurat(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-red">
                                    <span class="text-red d-inline-flex align-items-center lh-1"></span>
                                </div>
                                <div class="h1 m-0"><?php echo e(totalSuratByPenduduk($item) ?? '0'); ?></div>
                                <div class="text-muted mb-3"><?php echo e($item->nama ?? '-'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('penduduk.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/home.blade.php ENDPATH**/ ?>