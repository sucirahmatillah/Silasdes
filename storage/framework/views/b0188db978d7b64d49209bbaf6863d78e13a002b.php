<?php $__env->startSection('title', 'Verifikasi Email'); ?>

<?php $__env->startSection('content'); ?>
    <form id="form_submit" class="card card-md" action="<?php echo e(route('penduduk.verification.send')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="card-body">
            <h1 class="text-center">Verifikasi Email</h1>
            <p class="text-center">
                Link verifikasi telah dikirimkan ke Email Anda.<br>
                Segera cek email dan klik tombol "Verifikasi Email" agar dapat menggunakan akun Anda.
            </p>
            <?php if(session()->has('success')): ?>
                <p class=" text-center text-success fw-bold"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <div class="form-footer d-grid gap-3">
                <button type="submit" class="btn btn-primary">Kirim Ulang Link Verifikasi</button>
                <a href="<?php echo e(route('penduduk.logout')); ?>" class="btn btn-outline-danger"
                    onclick="event.preventDefault();document.getElementById('form_logout').submit();">
                    Logout
                </a>
            </div>
        </div>
    </form>
    <form id="form_logout" action="<?php echo e(route('penduduk.logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('penduduk.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/auth/verify-email.blade.php ENDPATH**/ ?>