<?php $__env->startSection('title', 'Pengajuan Baru'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <h1 class="text-center mb-3">Pilih Pengajuan Surat</h1>
            <div class="row">
                <?php $__currentLoopData = $jenis_surat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-lg-3 mb-3 d-flex align-items-stretch">
                        <div class="card card-md">
                            <div class="card-body">
                                <div class="text-uppercase font-weight-medium text-center">
                                    <strong> <?php echo e($item->nama ?? '-'); ?></strong>
                                </div>
                                <div class="mt-3 mb-2 text-muted text-center">PERSYARATAN</div>
                                <?php if($item->id == 'surat-keterangan-domisili'): ?>
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Surat Pengantar RT/RW<span class="text-danger">*</span></li>
                                        <li>Upload Surat Permohonan dokumen dan data</li>
                                        <li>Upload Surat Kuasa jika diwakilkan</li>
                                    </ol>
                                <?php endif; ?>
                                <?php if($item->id == 'surat-keterangan-kelahiran'): ?>
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Surat Pengantar RT/RW <span class="text-danger">*</span></li>
                                    </ol>
                                <?php endif; ?>
                                <?php if($item->id == 'surat-keterangan-kematian'): ?>
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Surat Pengantar RT/RW <span class="text-danger">*</span></li>
                                    </ol>
                                <?php endif; ?>
                                <?php if($item->id == 'surat-keterangan-tidak-mampu'): ?>
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                    </ol>
                                <?php endif; ?>
                                <?php if($item->id == 'surat-pengantar-pembuatan-ktp'): ?>
                                    <ol class=" lh-lg">
                                        <li>Melengkapi Biodata Diri<span class="text-danger">*</span></li>
                                        <li>Mengisi Formulir Surat<span class="text-danger">*</span></li>
                                        <li>Upload Dokumen Pendukung (Ijazah/Akta Kelahiran)<span
                                                class="text-danger">*</span></li>
                                    </ol>
                                <?php endif; ?>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <a href="<?php echo e(route('penduduk.surat.create', $item)); ?>" class="btn btn-primary w-100">
                                        Buat Pengajuan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('penduduk.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/surat/new.blade.php ENDPATH**/ ?>