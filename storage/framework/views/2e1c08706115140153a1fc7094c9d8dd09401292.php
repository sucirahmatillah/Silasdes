<?php $__env->startSection('content'); ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="<?php echo e(url('/')); ?>" class="d-flex align-items-center">
                <div class="logo">
                    <img src="assets/img/logo.png"
                        alt="" class="img-fluid">
                </div>
                <div class="d-flex flex-column text-muted mx-2">
                    <strong class="text-uppercase">DESA COT JAMBO</strong>
                    <small>Kecamatan Blang Bintang</small>
                </div>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Aparatur</a></li>
                    <li><a class="getstarted" href="<?php echo e(route('user.login')); ?>">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sistem Layanan Surat Desa</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Kantor Desa
                        Cot Jambo&nbsp;-&nbsp;blang Bintang
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="<?php echo e(route('penduduk.login')); ?>" class="btn-get-started scrollto">Layanan Surat</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 piagam" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?php echo e(asset('')); ?>web/assets/img/piagam.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?php echo e(asset('')); ?>images/kemendagri.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?php echo e(asset('')); ?>images/kemendesa.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?php echo e(asset('')); ?>images/kemkominfo.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?php echo e(asset('')); ?>images/satudata-indonesia.png" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                            Sistem Layanan Desa merupakan Sistem Pemerintahan Berbasis website yang 
                            diperuntukan bagi Pemerintah Tingkat Desa dalam meningkatkan efisiensi sistem 
                            guna mewujudkan Tata Kelola Pemerintahan yang efektif dan pelayanan publik yang berkualitas dan
                            terpercaya.
                        </p>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            Sistem Layanan Desa dibangun sesuai dengan:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i>
                            Undang-Undang Nomor 6 Tahun 2014 tentang Desa pasal 86 bagian ketiga menjelaskan pemerintahan 
                            dan Pemerintah Daerah wajib untuk mengembangkan Sistem Informasi Desa (SID) dan pembangunan 
                            Kawasan Perdesaan. 
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Memenuhi Standar Pelayanan Minimal Desa berdasarkan Permendagri No.2 Tahun 2017.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Menjalankan amanat UU No.6 tahun 2014 tentang Desa.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Serta Perpres No 39 Tahun 2019 tentang Kebijakan Satu Data Indonesia.
                            </li>
                            <li><i class="ri-check-double-line"></i>
                                Dan Peraturan Presiden Republik Indonesia Nomor 95 Tahun 2018 tentang Sistem
                                Pemerintahan Berbasis Elektronik.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Profil</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Sejarah gampong</a></h4>
                            <p class="description">
                             Desa Cot Jambo atau sering disebut CJB diperkirakan berdiri sebagai sebuah 
                             desa sejak tahun 1910, dimana desa ini dipimpin oleh Keuchik yang bernama Amad 
                             dengan jumlah penduduknya masih sangat minim. Sejarah pembangunan gampong Cot Jambo 
                             dimulai sejak tahun 1990. Desa ini terus berkembang dan perkembangannya yang sanggat
                             menonjol yaitu sejak pemerintahan Keuchik Zainuddin periode 2018-2024. 
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Informasi Singkat</a></h4>
                            <p class="description">
                            Desa Cot Jambo termasuk wilayah kemukiman Sungai Makmur Kec. Blang Bintang Kab. 
                             Aceh Besar dengan luas wilayah 150 Ha, jumlah penduduk yang tersebar di 3 Dusun berdasarkan 
                             data terakhir hasil sensus 2023 tercatat sebanyak 111 KK, 412 Jiwa, yang terdiri dari laki-laki 215 Jiwa, 
                             dan perempuan 197 Jiwa (RKPG 2024). 
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Microservices</a></h4>
                            <p class="description">
                                Aplikasi Layanan Desa juga menggunakan teknologi microservices yang
                                memungkinkan aplikasi ini mampu terintegrasi dan dibagipakaikan dengan berbagai aplikasi
                                pemerintahan lain yang berbasis Layanan Masyarakat.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>APARATUR</h2>
                    <p>Aparatur yang berhak akses website ini adalah:
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                            <h3>Kepala Desa/Keuchik</h3>
                            <p>
                               Tugas dari Kepala Desa/Keuchik pada saat mengelola sistem informasi ini adalah:
                            </p>
                            <ul>
                                <li>Memeriksa informasi terbaru.</li>
                                <li>Memeriksa penduduk yang melakukan pelayanan.</li>
                                <li>Menyetujui surat yang masuk.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Petugas</h3>
                            <p>
                                Tugas seorang Petugas dalam mengelola sistem informasi ini adalah:
                            </p>
                            <ul>
                                <li>Memeriksa informasi terbaru.</li>
                                <li>Mengelola data penduduk.</li>
                                <li>Memeriksa status surat.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                            <h3>Admin</h3>
                            <p>
                                Admin memiliki akses penuh dalam mengelola sistem informasi seperti:
                            </p>
                            <ul>
                                <li>Memeriksa informasi terbaru.</li>
                                <li>Memperbaharui data desa.</li>
                                <li>Memeriksa data pengguna sistem informasi yang terdaftar.</li>
                                <li>Memeriksa data penduduk.</li>
                                <li>Memeriksa status surat.</li>
                                <li>Memeriksa persetujuan surat.</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Pricing Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong><?php echo e(config('app.name')); ?></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Created by
                        <a href="#">Kantor Desa Cot Jambo&nbsp;-&nbsp;Blang Bintang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#hero" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#services" class="scrollto">Layanan</a>
                        <a href="#pricing" class="scrollto">Fitur</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\desaCjb\resources\views/web/home.blade.php ENDPATH**/ ?>