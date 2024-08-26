<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GH6R67xQzrSspkDe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZVaKh8G6RUqd1Hg1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UsZQw58knwima6TA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wilayah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wilayah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/authenticate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.authenticate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kantor-desa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kantor-desa.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kantor-desa/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kantor-desa.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pengguna' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.pengguna.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.pengguna.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pengguna/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.pengguna.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/penduduk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/penduduk/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/surat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/persetujuan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.persetujuan.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.password.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/authenticate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.authenticate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.registration',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/verification/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/verification/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/surat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/surat/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/cetak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.cetak.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.account.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/account/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.account.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/account/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.account.password.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/account/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.account.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penduduk/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/user/(?|reset\\-password/([^/]++)(*:40)|pe(?|n(?|gguna/([^/]++)(?|/edit(*:78)|(*:85))|duduk/([^/]++)(?|(*:110)|/edit(*:123)|(*:131)))|rsetujuan/(?|([^/]++)(*:162)|setujui/([^/]++)(*:186)))|surat/(?|create/([^/]++)(*:220)|store/([^/]++)(*:242)|edit/([^/]++)/([^/]++)(*:272)|update/([^/]++)/([^/]++)(*:304)|([^/]++)(*:320)|destroy/([^/]++)(*:344)|status/([^/]++)(*:367)|print/([^/]++)(*:389)))|/penduduk/(?|reset\\-password/([^/]++)(*:436)|verification/verify/([^/]++)/([^/]++)(*:481)|surat/(?|create/([^/]++)(*:513)|store/([^/]++)(*:535)|edit/([^/]++)/([^/]++)(*:565)|update/([^/]++)/([^/]++)(*:597)|([^/]++)(*:613)|destroy/([^/]++)(*:637))|cetak/print/([^/]++)(*:666)))/?$}sDu',
    ),
    3 => 
    array (
      40 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      78 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.pengguna.edit',
          ),
          1 => 
          array (
            0 => 'pengguna',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      85 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.pengguna.update',
          ),
          1 => 
          array (
            0 => 'pengguna',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.pengguna.destroy',
          ),
          1 => 
          array (
            0 => 'pengguna',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.show',
          ),
          1 => 
          array (
            0 => 'penduduk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.edit',
          ),
          1 => 
          array (
            0 => 'penduduk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.update',
          ),
          1 => 
          array (
            0 => 'penduduk',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.penduduk.destroy',
          ),
          1 => 
          array (
            0 => 'penduduk',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.persetujuan.show',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.persetujuan.setujui',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.create',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.store',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.edit',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
            1 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.update',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
            1 => 'surat',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.show',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.destroy',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.status',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.surat.print',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.create',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.store',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.edit',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
            1 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.update',
          ),
          1 => 
          array (
            0 => 'jenis_surat',
            1 => 'surat',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.show',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.surat.destroy',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penduduk.cetak.print',
          ),
          1 => 
          array (
            0 => 'surat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::GH6R67xQzrSspkDe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::GH6R67xQzrSspkDe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZVaKh8G6RUqd1Hg1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003af0000000000000000";}";s:4:"hash";s:44:"0ThjVooZ1cN4Z3yksdPM3b0rmow7NNdPN8clfCyIcCM=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZVaKh8G6RUqd1Hg1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UsZQw58knwima6TA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\HomeController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Web\\HomeController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UsZQw58knwima6TA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wilayah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wilayah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ReferensiController@wilayah',
        'controller' => 'App\\Http\\Controllers\\ReferensiController@wilayah',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wilayah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\LoginController@login',
        'as' => 'user.login',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.authenticate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/authenticate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\LoginController@authenticate',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\LoginController@authenticate',
        'as' => 'user.authenticate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\ForgotPasswordController@passwordRequest',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\ForgotPasswordController@passwordRequest',
        'as' => 'user.password.request',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\ForgotPasswordController@passwordEmail',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\ForgotPasswordController@passwordEmail',
        'as' => 'user.password.email',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\ResetPasswordController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\ResetPasswordController@passwordReset',
        'as' => 'user.password.reset',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\ResetPasswordController@passwordUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\ResetPasswordController@passwordUpdate',
        'as' => 'user.password.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\HomeController@__invoke',
        'controller' => 'App\\Http\\Controllers\\User\\HomeController',
        'as' => 'user.home',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kantor-desa.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/kantor-desa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\KantorDesaController@index',
        'controller' => 'App\\Http\\Controllers\\User\\KantorDesaController@index',
        'as' => 'user.kantor-desa.index',
        'namespace' => NULL,
        'prefix' => 'user/kantor-desa',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kantor-desa.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/kantor-desa/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\KantorDesaController@update',
        'controller' => 'App\\Http\\Controllers\\User\\KantorDesaController@update',
        'as' => 'user.kantor-desa.update',
        'namespace' => NULL,
        'prefix' => 'user/kantor-desa',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pengguna.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pengguna',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.pengguna.index',
        'uses' => 'App\\Http\\Controllers\\User\\PenggunaController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PenggunaController@index',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pengguna.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pengguna/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.pengguna.create',
        'uses' => 'App\\Http\\Controllers\\User\\PenggunaController@create',
        'controller' => 'App\\Http\\Controllers\\User\\PenggunaController@create',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pengguna.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/pengguna',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.pengguna.store',
        'uses' => 'App\\Http\\Controllers\\User\\PenggunaController@store',
        'controller' => 'App\\Http\\Controllers\\User\\PenggunaController@store',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pengguna.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pengguna/{pengguna}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.pengguna.edit',
        'uses' => 'App\\Http\\Controllers\\User\\PenggunaController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\PenggunaController@edit',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pengguna.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user/pengguna/{pengguna}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.pengguna.update',
        'uses' => 'App\\Http\\Controllers\\User\\PenggunaController@update',
        'controller' => 'App\\Http\\Controllers\\User\\PenggunaController@update',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pengguna.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/pengguna/{pengguna}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.pengguna.destroy',
        'uses' => 'App\\Http\\Controllers\\User\\PenggunaController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\PenggunaController@destroy',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/penduduk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.index',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@index',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/penduduk/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.create',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@create',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@create',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/penduduk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.store',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@store',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@store',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/penduduk/{penduduk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.show',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@show',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@show',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/penduduk/{penduduk}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.edit',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@edit',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user/penduduk/{penduduk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.update',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@update',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@update',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.penduduk.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/penduduk/{penduduk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'as' => 'user.penduduk.destroy',
        'uses' => 'App\\Http\\Controllers\\User\\PendudukController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\PendudukController@destroy',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/surat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@index',
        'as' => 'user.surat.index',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/surat/create/{jenis_surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@create',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@create',
        'as' => 'user.surat.create',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/surat/store/{jenis_surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@store',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@store',
        'as' => 'user.surat.store',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/surat/edit/{jenis_surat}/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@edit',
        'as' => 'user.surat.edit',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/surat/update/{jenis_surat}/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@update',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@update',
        'as' => 'user.surat.update',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/surat/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@show',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@show',
        'as' => 'user.surat.show',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/surat/destroy/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@destroy',
        'as' => 'user.surat.destroy',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/surat/status/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@status',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@status',
        'as' => 'user.surat.status',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.surat.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/surat/print/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SuratController@print',
        'controller' => 'App\\Http\\Controllers\\User\\SuratController@print',
        'as' => 'user.surat.print',
        'namespace' => NULL,
        'prefix' => 'user/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.persetujuan.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/persetujuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PersetujuanController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PersetujuanController@index',
        'as' => 'user.persetujuan.index',
        'namespace' => NULL,
        'prefix' => 'user/persetujuan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.persetujuan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/persetujuan/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PersetujuanController@show',
        'controller' => 'App\\Http\\Controllers\\User\\PersetujuanController@show',
        'as' => 'user.persetujuan.show',
        'namespace' => NULL,
        'prefix' => 'user/persetujuan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.persetujuan.setujui' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/persetujuan/setujui/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PersetujuanController@setujui',
        'controller' => 'App\\Http\\Controllers\\User\\PersetujuanController@setujui',
        'as' => 'user.persetujuan.setujui',
        'namespace' => NULL,
        'prefix' => 'user/persetujuan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AccountController@profileEdit',
        'controller' => 'App\\Http\\Controllers\\User\\AccountController@profileEdit',
        'as' => 'user.account.profile.edit',
        'namespace' => NULL,
        'prefix' => 'user/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/account/profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AccountController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\AccountController@profileUpdate',
        'as' => 'user.account.profile.update',
        'namespace' => NULL,
        'prefix' => 'user/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.password.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/account/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AccountController@passwordEdit',
        'controller' => 'App\\Http\\Controllers\\User\\AccountController@passwordEdit',
        'as' => 'user.account.password.edit',
        'namespace' => NULL,
        'prefix' => 'user/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/account/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\AccountController@passwordUpdate',
        'controller' => 'App\\Http\\Controllers\\User\\AccountController@passwordUpdate',
        'as' => 'user.account.password.update',
        'namespace' => NULL,
        'prefix' => 'user/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\LogoutController@__invoke',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\LogoutController',
        'as' => 'user.logout',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\LoginController@login',
        'as' => 'penduduk.login',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.authenticate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/authenticate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\LoginController@authenticate',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\LoginController@authenticate',
        'as' => 'penduduk.authenticate',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\RegisterController@register',
        'as' => 'penduduk.register',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.registration' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\RegisterController@registration',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\RegisterController@registration',
        'as' => 'penduduk.registration',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ForgotPasswordController@passwordRequest',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ForgotPasswordController@passwordRequest',
        'as' => 'penduduk.password.request',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ForgotPasswordController@passwordEmail',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ForgotPasswordController@passwordEmail',
        'as' => 'penduduk.password.email',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ResetPasswordController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ResetPasswordController@passwordReset',
        'as' => 'penduduk.password.reset',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ResetPasswordController@passwordUpdate',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\ResetPasswordController@passwordUpdate',
        'as' => 'penduduk.password.update',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/verification/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\VerificationController@verificationNotice',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\VerificationController@verificationNotice',
        'as' => 'penduduk.verification.notice',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/verification/verify/{id}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\VerificationController@verificationVerify',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\VerificationController@verificationVerify',
        'as' => 'penduduk.verification.verify',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/verification/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\VerificationController@verificationSend',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\VerificationController@verificationSend',
        'as' => 'penduduk.verification.send',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\HomeController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\HomeController',
        'as' => 'penduduk.home',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/surat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@index',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@index',
        'as' => 'penduduk.surat.index',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/surat/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@new',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@new',
        'as' => 'penduduk.surat.new',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/surat/create/{jenis_surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@create',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@create',
        'as' => 'penduduk.surat.create',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/surat/store/{jenis_surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@store',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@store',
        'as' => 'penduduk.surat.store',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/surat/edit/{jenis_surat}/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@edit',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@edit',
        'as' => 'penduduk.surat.edit',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'penduduk/surat/update/{jenis_surat}/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@update',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@update',
        'as' => 'penduduk.surat.update',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/surat/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@show',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@show',
        'as' => 'penduduk.surat.show',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.surat.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'penduduk/surat/destroy/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\SuratController@destroy',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\SuratController@destroy',
        'as' => 'penduduk.surat.destroy',
        'namespace' => NULL,
        'prefix' => 'penduduk/surat',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.cetak.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/cetak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\CetakController@index',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\CetakController@index',
        'as' => 'penduduk.cetak.index',
        'namespace' => NULL,
        'prefix' => 'penduduk/cetak',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.cetak.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/cetak/print/{surat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\CetakController@print',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\CetakController@print',
        'as' => 'penduduk.cetak.print',
        'namespace' => NULL,
        'prefix' => 'penduduk/cetak',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.account.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\AccountController@profileEdit',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\AccountController@profileEdit',
        'as' => 'penduduk.account.profile.edit',
        'namespace' => NULL,
        'prefix' => 'penduduk/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.account.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/account/profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\AccountController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\AccountController@profileUpdate',
        'as' => 'penduduk.account.profile.update',
        'namespace' => NULL,
        'prefix' => 'penduduk/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.account.password.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penduduk/account/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\AccountController@passwordEdit',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\AccountController@passwordEdit',
        'as' => 'penduduk.account.password.edit',
        'namespace' => NULL,
        'prefix' => 'penduduk/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.account.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/account/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
          2 => 'verified.penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\AccountController@passwordUpdate',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\AccountController@passwordUpdate',
        'as' => 'penduduk.account.password.update',
        'namespace' => NULL,
        'prefix' => 'penduduk/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penduduk.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penduduk/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:penduduk',
        ),
        'uses' => 'App\\Http\\Controllers\\Penduduk\\Auth\\LogoutController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Penduduk\\Auth\\LogoutController',
        'as' => 'penduduk.logout',
        'namespace' => NULL,
        'prefix' => '/penduduk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
