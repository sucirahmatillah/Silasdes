<div class="sticky-top">
    <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="<?php echo e(route('penduduk.home')); ?>" class="d-flex align-items-center" style="text-decoration: none;">
                    <img src="assets/img/logocjb.png"
                        alt="" class="navbar-brand-image">
                    <div class="d-flex flex-column text-muted mx-2">
                        <strong class="text-uppercase">DESA COT JAMBO</strong>
                        <small>Kecamatan Blang Bintang</small>
                    </div>
                </a>
            </div>
            <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                        aria-label="Open user menu">
                        <img src="<?php echo e(Avatar::create(auth()->guard('penduduk')->user()->nama)->toBase64()); ?>"
                            class="avatar avatar-sm rounded-circle" />
                        <div class="d-none d-xl-block ps-2">
                            <div><?php echo e(auth()->user()->nama); ?></div>
                            <div class="mt-1 small text-muted">
                                <?php echo e(auth()->user()->email); ?>

                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="<?php echo e(route('penduduk.account.profile.edit')); ?>" class="dropdown-item">
                            Profil
                        </a>
                        <a href="<?php echo e(route('penduduk.account.password.edit')); ?>" class="dropdown-item">
                            Ubah Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route('penduduk.logout')); ?>" class="dropdown-item text-danger"
                            onclick="event.preventDefault();document.getElementById('form_logout').submit();">
                            Logout
                        </a>
                        <form id="form_logout" action="<?php echo e(route('penduduk.logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php echo e(Request::is('penduduk') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('penduduk.home')); ?>">
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li
                            class="nav-item <?php echo e(Request::is('penduduk/surat') || Request::is('penduduk/surat/*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('penduduk.surat.index')); ?>">
                                <span class="nav-link-title">
                                    Pengajuan Surat
                                </span>
                            </a>
                        </li>
                        <li
                            class="nav-item <?php echo e(Request::is('penduduk/cetak') || Request::is('penduduk/cetak/*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('penduduk.cetak.index')); ?>">
                                <span class="nav-link-title">
                                    Cetak Surat
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/penduduk/layouts/header.blade.php ENDPATH**/ ?>