@extends('pdf.layouts.main')

@section('title', $surat->jenisSurat->nama ?? '')

@section('content')
    <p style="text-align:center">
        <strong style="font-size:16px">
            <u>{{ strtoupper($surat->jenisSurat->nama ?? 'Surat') }}</u>
        </strong>
        <br>
        <span style="font-size:16px">
            Nomor: {{ $surat->no_surat ?? '-' }}
        </span>
    </p>
    <p style="text-align:justify">
        Yang bertanda tangan dibawah ini Kepala Desa {{ kantorDesa()->kelurahan->nama ?? '' }}, Kecamatan
        {{ kantorDesa()->kecamatan->nama ?? '' }},
        {{ kantorDesa()->kabKota->nama ?? '' }} menerangkan dengan sebenarnya, bahwa:
    </p>
    <table>
        <tbody>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->nik ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->jenisKelamin->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Tempat, Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->tempat_lahir ?? '-') }},
                    {{ $surat->penduduk->tanggal_lahir ? date_format(date_create($surat->penduduk->tanggal_lahir), 'd-m-Y') : '-' }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Warganegara/Agama</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->kewarganegaraan->nama ?? '-') }}
                    /
                    {{ strtoupper($surat->penduduk->agama->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->pekerjaan->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Status Perkawinan</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->statusPerkawinan->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->penduduk->alamat ?? '-') }},
                    RT. {{ strtoupper($surat->penduduk->rt ?? '-') }}
                    RW. {{ strtoupper($surat->penduduk->rw ?? '-') }},
                    KEL. {{ strtoupper($surat->penduduk->kelurahan->nama ?? '-') }},
                    KEC. {{ strtoupper($surat->penduduk->kecamatan->nama ?? '-') }},
                    {{ strtoupper($surat->penduduk->kabKota->nama ?? '-') }},
                    {{ strtoupper($surat->penduduk->provinsi->nama ?? '-') }}
                </td>
            </tr>
        </tbody>
    </table>

    <p style="text-align:justify">Dengan ini menerangkan bahwa benar yang bersangkutan berdomisili di
        {{ ucwords($surat->penduduk->alamat ?? '-') }},
        RT. {{ ucwords($surat->penduduk->rt ?? '-') }}
        RW. {{ ucwords($surat->penduduk->rw ?? '-') }},
        Kel. {{ ucwords($surat->penduduk->kelurahan->nama ?? '-') }},
        Kec. {{ ucwords($surat->penduduk->kecamatan->nama ?? '-') }},
        {{ ucwords($surat->penduduk->kabKota->nama ?? '-') }},
        {{ ucwords($surat->penduduk->provinsi->nama ?? '-') }}. Surat
        Keterangan ini dibuat untuk <strong>{{ $surat->keperluan ?? '' }}</strong>.<br>
        Demikian surat keterangan ini dibuat, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
    </p>
    <br>
    <table style="width:100%">
        <tbody>
            <tr>
                <td style="text-align:center; width:50%">&nbsp;</td>
                <td style="text-align:center; width:50%">
                    {{ kantorDesa()->kelurahan->nama ?? '' }},
                    {{ $surat->tanggal_surat ? date_format(date_create($surat->tanggal_surat), 'd-m-Y') : '-' }}<br>
                    {{ strtoupper($surat->pegawai->jabatan->nama ?? '') }}
                    {{ strtoupper(kantorDesa()->kelurahan->nama ?? '') }}</td>
            </tr>
            <tr>
                <td style="height:100px; text-align:center; width:50%">&nbsp;</td>
                <td style="height:100px; text-align:center; width:50%">
                    <img src="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->ttd_kepala_desa : 'kantor-desa/ttd-kepala-desa.png' }}"
                        alt="ttd" style="width: 150px; height: 150px;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; width:50%">&nbsp;</td>
                <td style="text-align:center; width:50%">
                    <strong>
                        <u>{{ strtoupper(kantorDesa()->nama_kepala_desa ?? '') }}.</u>
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
