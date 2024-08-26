<?php $__env->startSection('title', $surat->jenisSurat->nama ?? ''); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title mb-1">
                                        Detail
                                    </h3>
                                    <div class="text-muted">
                                        Informasi <?php echo e($surat->jenisSurat->nama ?? ''); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="card-actions">
                                <?php if($surat->id_status_surat != 4): ?>
                                    <a class="btn-link text-info mx-2"
                                        href="<?php echo e(route('penduduk.surat.edit', [
                                            'jenis_surat' => $surat->id_jenis_surat,
                                            'surat' => $surat,
                                        ])); ?>">
                                        Ubah
                                    </a>
                                <?php endif; ?>
                                <a class="btn-link text-warning mx-2" href="<?php echo e(route('penduduk.surat.index')); ?>">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    No. Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($surat->no_surat ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jenis Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($surat->jenisSurat->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Pemohon
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($surat->penduduk->nama ?? '-'); ?>&nbsp;-&nbsp;<?php echo e($surat->penduduk->nik ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($surat->tanggal_surat ? date_format(date_create($surat->tanggal_surat), 'd-m-Y') : '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Keperluan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($surat->keperluan ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Keterangan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php if($surat->keterangan): ?>
                                        <?php echo e($surat->keterangan ?? '-'); ?>

                                    <?php else: ?>
                                        <?php echo e($surat->statusSurat->keterangan ?? '-'); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('penduduk.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/surat/show/surat-keterangan-tidak-mampu.blade.php ENDPATH**/ ?>