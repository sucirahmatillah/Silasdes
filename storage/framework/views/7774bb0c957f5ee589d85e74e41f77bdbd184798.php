<?php $__env->startSection('title', 'Lupa Password'); ?>

<?php $__env->startSection('content'); ?>
    <form id="form_submit" class="card card-md" action="<?php echo e(route('penduduk.password.email')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="card-body">
            <h1 class="text-center">Lupa Password</h1>
            <p class="text-center text-muted">
                Kami akan mengirim instruksi untuk mengganti password. Silahkan masukkan email Anda.
            </p>
            <?php if(Session::has('success')): ?>
                <p class=" text-center text-success fw-bold"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            <div class="mb-2">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="on"
                    value="<?php echo e(old('email')); ?>" />
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-footer d-grid gap-2">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="<?php echo e(route('penduduk.login')); ?>" class="btn btn-outline-primary">Kembali</a>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <?php echo JsValidator::formRequest('App\Http\Requests\Penduduk\Auth\ForgotPasswordRequest', '#form_submit'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('penduduk.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/auth/forgot-password.blade.php ENDPATH**/ ?>