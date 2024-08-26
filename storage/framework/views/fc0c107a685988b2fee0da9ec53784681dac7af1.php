<?php $__env->startSection('title', 'Detail Penduduk'); ?>

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
                                        Informasi Data Penduduk
                                    </div>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a class="btn-link text-info mx-2" href="<?php echo e(route('user.penduduk.edit', $penduduk)); ?>">
                                    Ubah
                                </a>
                                <a class="btn-link text-warning mx-2" href="<?php echo e(route('user.penduduk.index')); ?>">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    No. Kartu Keluarga
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->no_kk ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    NIK
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->nik ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tempat Lahir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->tempat_lahir ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Lahir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->tanggal_lahir ? date_format(date_create($penduduk->tanggal_lahir), 'd-m-Y') : '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jenis Kelamin
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->jenisKelamin->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Golongan Darah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->golonganDarah->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Alamat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->alamat ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    RT/RW
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->rt ?? '-'); ?>/<?php echo e($penduduk->rw ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kode POS
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->kode_pos ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kelurahan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->kelurahan->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kecamatan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->kecamatan->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kabupaten/Kota
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->kabKota->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Provinsi
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->provinsi->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Agama
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->agama->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Status Perkawinan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->statusPerkawinan->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Pendidikan Terakhir
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->pendidikan->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Pekerjaan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->pekerjaan->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kewarganegaraan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->kewarganegaraan->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Status Hubungan Dalam Keluarga
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->shdk->nama ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    NIK Ibu
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->nik_ibu ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama Ibu
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->nama_ibu ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    NIK Ayah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->nik_ayah ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Nama Ayah
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->nama_ayah ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Telepon
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->telepon ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Email
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php echo e($penduduk->email ?? '-'); ?>

                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kartu Keluarga (Scan/Foto)
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php if($penduduk->file_kk): ?>
                                        <a href="<?php echo e($penduduk->file_kk); ?>" target="_blank">
                                            Lihat
                                        </a>
                                    <?php else: ?>
                                        <span class="text-warning">Belum Upload</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Kartu Tanda Penduduk (Scan/Foto)
                                </div>
                                <div class="col-md-8 fw-bold">
                                    <?php if($penduduk->file_ktp): ?>
                                        <a href="<?php echo e($penduduk->file_ktp); ?>" target="_blank">
                                            Lihat
                                        </a>
                                    <?php else: ?>
                                        <span class="text-warning">Belum Upload</span>
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

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/user/penduduk/show.blade.php ENDPATH**/ ?>