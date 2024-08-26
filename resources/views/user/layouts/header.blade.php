<div class="sticky-top">
    <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="{{ route('penduduk.home') }}" class="d-flex align-items-center" style="text-decoration: none;">
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
                        <img src="{{ Avatar::create(auth()->guard('user')->user()->nama)->toBase64() }}"
                            class="avatar avatar-sm rounded-circle" />
                        <div class="d-none d-xl-block ps-2">
                            <div>{{ auth()->user()->nama }}</div>
                            <div class="mt-1 small text-muted">
                                {{ auth()->user()->email }}
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="{{ route('user.account.profile.edit') }}" class="dropdown-item">
                            Profil
                        </a>
                        <a href="{{ route('user.account.password.edit') }}" class="dropdown-item">
                            Ubah Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('user.logout') }}" class="dropdown-item text-danger"
                            onclick="event.preventDefault();document.getElementById('form_logout').submit();">
                            Logout
                        </a>
                        <form id="form_logout" action="{{ route('user.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- Menu --}}
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::is('user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.home') }}">
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        @can('index-kantor-desa')
                            <li class="nav-item {{ Request::is('user/kantor-desa') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user.kantor-desa.index') }}">
                                    <span class="nav-link-title">
                                        Kantor Desa
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('index-pengguna')
                            <li
                                class="nav-item {{ Request::is('user/pengguna') || Request::is('user/pengguna/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user.pengguna.index') }}">
                                    <span class="nav-link-title">
                                        Pengguna
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('index-penduduk')
                            <li
                                class="nav-item {{ Request::is('user/penduduk') || Request::is('user/penduduk/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user.penduduk.index') }}">
                                    <span class="nav-link-title">
                                        Penduduk
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('index-surat')
                            <li
                                class="nav-item {{ Request::is('user/surat') || Request::is('user/surat/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user.surat.index') }}">
                                    <span class="nav-link-title">
                                        Surat
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('index-persetujuan')
                            <li
                                class="nav-item {{ Request::is('user/persetujuan') || Request::is('user/persetujuan/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user.persetujuan.index') }}">
                                    <span class="nav-link-title">
                                        Persetujuan
                                    </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
