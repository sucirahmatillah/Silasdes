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
    <!-- Libs CSS -->

    <!-- Vendor CSS -->
    <link href="<?php echo e(asset('')); ?>dashboard/assets/vendors/dataTables/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>dashboard/assets/vendors/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>dashboard/assets/vendors/select2/select2-bootstrap-5-theme.min.css"
        rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>dashboard/assets/vendors/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>dashboard/assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        .float {
            position: fixed;
            bottom: 40px;
            right: 40px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }
    </style>
    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>
    <div class="page">
        <?php echo $__env->make('penduduk.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('penduduk.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php if(empty(auth()->guard('penduduk')->user()->no_kk
        ) ||
            empty(auth()->guard('penduduk')->user()->file_kk
            )): ?>
        <?php if(!Request::is('penduduk/account/profile')): ?>
            <a href="<?php echo e(route('penduduk.account.profile.edit')); ?>" class="float btn btn-warning">
                Lengkapi Biodata Diri Anda!
            </a>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Js Core -->
    <script src="<?php echo e(asset('')); ?>dashboard/assets/js/tabler.min.js" defer></script>
    <!-- Libs JS -->

    <!-- Vendor JS -->
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/jquery/jquery-3.5.1.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/dataTables/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/select2/select2.full.min.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/toastr/build/toastr.min.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?php echo e(asset('')); ?>dashboard/assets/vendors/ckeditor5/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>

    <?php if(Session::has('success')): ?>
        <script>
            toastr["success"]("<?php echo e(Session::get('success')); ?>")
        </script>
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/layouts/main.blade.php ENDPATH**/ ?>