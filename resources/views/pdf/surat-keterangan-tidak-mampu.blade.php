@extends('pdf.layouts.main')
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
        Keuchik Gampong Cot Jambo Kecamatan Blang Bintang Kabupaten Aceh Besar, 
        dengan ini menerangkan bahwa :
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

    <p style="text-align:justify">
        Nama tersebut diatas adalah benar warga Gampong Cot Jambo Kecamatan Blang Bintang 
        Kabupaten Aceh Besar, dengan ini menerangkan bahwa.
        Berdasarkan keterangan yang ada pada kami benar bahwa yang bersangkutan tergolong keluarga tidak mampu.<br>
        Surat Keterangan ini dibuat untuk <strong>{{ $surat->keperluan ?? '' }}</strong>.
    </p>
    <p style="text-align:justify">
        Demikian surat keterangan ini dibuat, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
    </p>
    <br>
    <table style="width:100%">
        <tbody>
            <tr>
                <td style="text-align:left; width:50%">&nbsp;</td>
                <td style="text-align:left; width:50%">
                    Cot Jambo,
                    {{ $surat->tanggal_surat ? date_format(date_create($surat->tanggal_surat), 'd-m-Y') : '-' }}<br>
                    {{ strtoupper($surat->pegawai->jabatan->nama ?? '') }}
                    Keuchik Gampong Cot Jambo</td>
            </tr>
            <tr>
                <td style="height:100px; text-align:left; width:50%">&nbsp;</td>
                <td style="height:100px; text-align:left; width:50%">
                <img src="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->ttd_kepala_desa : 'kantor-desa/ttd-kepala-desa.png' }}"
                        alt="ttd" style="width: 150px; height: 150px;">
                </td>
            </tr>
            <tr>
                <td style="text-align:left; width:50%">&nbsp;</td>
                <td style="text-align:left; width:50%">
                    <strong>
                        <u>PJ. Keuchik</u>
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
@endsection