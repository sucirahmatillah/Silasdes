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
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Bin/Binti</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->bin_binti ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->nik ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->jenisKelamin->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Tempat, Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->tempat_lahir ?? '-') }},
                    {{ $surat->suratKeteranganKematian->penduduk->tanggal_lahir ? date_format(date_create($surat->suratKeteranganKematian->penduduk->tanggal_lahir), 'd-m-Y') : '-' }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Warganegara/Agama</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->kewarganegaraan->nama ?? '-') }}
                    /
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->agama->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->pekerjaan->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Status Perkawinan</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->statusPerkawinan->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->alamat ?? '-') }},
                    RT. {{ strtoupper($surat->suratKeteranganKematian->penduduk->rt ?? '-') }}
                    RW. {{ strtoupper($surat->suratKeteranganKematian->penduduk->rw ?? '-') }},
                    KEL. {{ strtoupper($surat->suratKeteranganKematian->penduduk->kelurahan->nama ?? '-') }},
                    KEC. {{ strtoupper($surat->suratKeteranganKematian->penduduk->kecamatan->nama ?? '-') }},
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->kabKota->nama ?? '-') }},
                    {{ strtoupper($surat->suratKeteranganKematian->penduduk->provinsi->nama ?? '-') }}
                </td>
            </tr>
            <tr>
                <td colspan="3">Telah meninggal dunia pada:</td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Tanggal</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ $surat->suratKeteranganKematian->tanggal_meninggal ? date_format(date_create($surat->suratKeteranganKematian->tanggal_meninggal), 'd-m-Y') : '-' }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Jam</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->jam_meninggal ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Tempat Meninggal</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->tempat_meninggal ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Sebab Kematian</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKematian->sebab_kematian ?? '-') }}
                </td>
            </tr>
        </tbody>
    </table>

    <p style="text-align:justify">
        Demikian Surat Keterangan Kematian ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya.
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
