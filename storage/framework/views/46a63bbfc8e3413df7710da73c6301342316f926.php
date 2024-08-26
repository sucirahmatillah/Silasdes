<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php if (! empty(trim($__env->yieldContent('title')))): ?>
        <title><?php echo $__env->yieldContent('title'); ?>&nbsp;-&nbsp;<?php echo e(config('app.name')); ?></title>
    <?php else: ?>
        <title><?php echo e(config('app.name')); ?></title>
    <?php endif; ?>
    <!-- Favicons -->
    <link href="<?php echo e(asset('')); ?><?php echo e(kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png'); ?>" rel="icon">
    <link href="<?php echo e(asset('')); ?><?php echo e(kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png'); ?>"
        rel="apple-touch-icon">

    <!-- CSS files -->
    <link href="<?php echo e(asset('')); ?>dashboard/assets/css/tabler.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>dashboard/assets/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>dashboard/assets/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>dashboard/assets/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>dashboard/assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>dashboard/assets/vendors/toastr/build/toastr.min.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-3">
                <a href="<?php echo e(url('/')); ?>" class="navbar-brand navbar-brand-autodark">
                    <img src="<?php echo e(asset('')); ?><?php echo e(kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png'); ?>"
                        height="50" alt="logo">
                </a>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <!-- Js Core -->
    <script src="<?php echo e(asset('')); ?>dashboard/assets/js/tabler.min.js" defer></script>
    <!-- Vendor JS -->
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/jquery/jquery-3.5.1.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/toastr/build/toastr.min.js"></script>

    <!-- Libs JS -->
    <script type="text/javascript" src="<?php echo e(asset('vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>
    <?php if(Session::has('success')): ?>
        <script>
            toastr["success"]("<?php echo e(Session::get('success')); ?>")
        </script>
    <?php endif; ?>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/user/layouts/auth.blade.php ENDPATH**/ ?>