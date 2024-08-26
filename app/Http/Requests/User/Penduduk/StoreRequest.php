<?php

namespace App\Http\Requests\User\Penduduk;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'no_kk' => ['required', 'digits:16'],
            'nik' => ['required', 'digits:16', 'unique:penduduk,nik'],
            'nama' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date_format:Y-m-d'],
            'id_jenis_kelamin' => ['required', 'numeric'],
            'id_golongan_darah' => ['required', 'numeric'],
            'alamat' => ['required', 'string'],
            'rt' => ['required', 'digits:3'],
            'rw' => ['required', 'digits:3'],
            'kode_pos' => ['required', 'digits:5'],
            'id_provinsi' => ['required', 'numeric'],
            'id_kab_kota' => ['required', 'numeric'],
            'id_kecamatan' => ['required', 'numeric'],
            'id_kelurahan' => ['required', 'numeric'],
            'id_agama' => ['required', 'numeric'],
            'id_status_perkawinan' => ['required', 'numeric'],
            'id_pendidikan' => ['required', 'numeric'],
            'id_pekerjaan' => ['required', 'numeric'],
            'id_kewarganegaraan' => ['required', 'numeric'],
            'id_shdk' => ['required', 'numeric'],
            'nik_ibu' => ['required', 'digits:16'],
            'nama_ibu' => ['required', 'string', 'max:255'],
            'nik_ayah' => ['required', 'digits:16'],
            'nama_ayah' => ['required', 'string', 'max:255'],
            'telepon' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'unique:penduduk,email'],
            'file_kk' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            'file_ktp' => ['nullable', 'mimes:png,jpg', 'max:2048'],
        ];
    }

    public function attributes()
    {
        return [
            'no_kk' => 'No. Kartu Keluarga',
            'nik' => 'NIK',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'id_jenis_kelamin' => 'Jenis Kelamin',
            'id_golongan_darah' => 'Golongan Darah',
            'alamat' => 'Alamat',
            'rt' => 'RT',
            'rw' => 'RW',
            'kode_pos' => 'Kode POS',
            'id_provinsi' => 'Provinsi',
            'id_kab_kota' => 'Kabupaten/Kota',
            'id_kecamatan' => 'Kecamatan',
            'id_kelurahan' => 'Kelurahan/Desa',
            'id_agama' => 'Agama',
            'id_status_perkawinan' => 'Status Perkawinan',
            'id_pendidikan' => 'Pendidikan Terakhir',
            'id_pekerjaan' => 'Pekerjaan',
            'id_kewarganegaraan' => 'Kewarganegaraan',
            'id_shdk' => 'Status Hubungan Dalam Keluarga',
            'nik_ibu' => 'NIK Ibu',
            'nama_ibu' => 'Nama Ibu Kandung',
            'nik_ayah' => 'NIK Ayah',
            'nama_ayah' => 'Nama Ayah Kandung',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'kartu_keluarga' => 'Kartu Keluarga (Scan/Foto)',
            'kartu_tanda_penduduk' => 'Kartu Tanda Penduduk (Scan/Foto)',
        ];
    }
}
