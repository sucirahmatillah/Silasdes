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
                    {{ strtoupper($surat->suratKeteranganKelahiran->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKelahiran->jenisKelamin->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Agama</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKelahiran->agama->nama ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Anak Ke</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKelahiran->anak_ke ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ $surat->suratKeteranganKelahiran->tanggal_lahir ? date_format(date_create($surat->suratKeteranganKelahiran->tanggal_lahir), 'd-m-Y') : '-' }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Jam Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ $surat->suratKeteranganKelahiran->jam_lahir ?? '-' }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Berat Badan</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ $surat->suratKeteranganKelahiran->berat_badan ?? '0' }} gram
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Nama Ayah</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKelahiran->nama_ayah ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Nama Ibu</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKelahiran->nama_ibu ?? '-') }}
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td style="white-space: nowrap;">Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="text-align:justify">
                    {{ strtoupper($surat->suratKeteranganKelahiran->alamat ?? '-') }},
                    RT. {{ strtoupper($surat->suratKeteranganKelahiran->rt ?? '-') }}
                    RW. {{ strtoupper($surat->suratKeteranganKelahiran->rw ?? '-') }},
                    KEL. {{ strtoupper($surat->suratKeteranganKelahiran->kelurahan->nama ?? '-') }},
                    KEC. {{ strtoupper($surat->suratKeteranganKelahiran->kecamatan->nama ?? '-') }},
                    {{ strtoupper($surat->suratKeteranganKelahiran->kabKota->nama ?? '-') }},
                    {{ strtoupper($surat->suratKeteranganKelahiran->provinsi->nama ?? '-') }}
                </td>
            </tr>
        </tbody>
    </table>

    <p style="text-align:justify">
        Surat keterangan ini sebagai persyaratan untuk <strong>{{ $surat->keperluan }}</strong> pada Dinas Kependudukan dan
        Pencatatan Sipil {{ kantorDesa()->kabKota->nama ?? '' }}.
    </p>
    <p style="text-align:justify">
        Demikian Surat Keterangan ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya.
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
