<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @hasSection('title')
        <title>@yield('title')</title>
    @else
        <title>Surat</title>
    @endif
</head>

<body>
    <table style="width:100%">
        <tbody>
            <tr>
                <td style="width:20%;">
                    <img src="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
                        alt="Logo" style="width:100px" />
                </td>
                <td style="width:50%; text-align:center;">
                    <strong style="font-size:18px">
                        PEMERINTAH KABUPATEN ACEH BESAR
                    </strong><br>
                    <strong style="font-size:18px">
                        KECAMATAN BLANG BINTANG 
                    </strong><br>
                    <strong style="font-size: 18px">
                        GAMPONG COT JAMBO
                    </strong><br>
                    <span style="font-size:14px">
                        Jl. Blang Bintang - Montasik,
                        Kode Pos 23360
                    </span>
                </td>
                <td style="width: 25%;"></td>
            </tr>
        </tbody>
    </table>
    <hr>
    @yield('content')
</body>

</html>
