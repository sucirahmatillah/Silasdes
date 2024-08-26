<?php

namespace App\Http\Requests\Penduduk\Surat;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        if ($this->jenis_surat->id == 'surat-keterangan-domisili') {
            $rules = [
                'keperluan' => ['required', 'string', 'max:255'],
                'file_surat_pengantar' => ['nullable', 'mimes:png,jpg', 'max:2048'],
                'file_surat_permohonan' => ['nullable', 'mimes:png,jpg', 'max:2048'],
                'file_surat_kuasa' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            ];
        }

        if ($this->jenis_surat->id == 'surat-keterangan-kelahiran') {
            $rules = [
                'keperluan' => ['required', 'string', 'max:255'],
                'nama' => ['required', 'string', 'max:255'],
                'id_jenis_kelamin' => ['required', 'numeric'],
                'id_agama' => ['required', 'numeric'],
                'anak_ke' => ['required', 'string', 'max:32'],
                'tanggal_lahir' => ['required', 'date_format:Y-m-d'],
                'jam_lahir' => ['required', 'date_format:H:i'],
                'berat_badan' => ['required', 'string', 'max:255'],
                'nama_ayah' => ['required', 'string', 'max:255'],
                'nama_ibu' => ['required', 'string', 'max:255'],
                'alamat' => ['required', 'string'],
                'rt' => ['required', 'digits:3'],
                'rw' => ['required', 'digits:3'],
                'kode_pos' => ['required', 'digits:5'],
                'id_provinsi' => ['required', 'numeric'],
                'id_kab_kota' => ['required', 'numeric'],
                'id_kecamatan' => ['required', 'numeric'],
                'id_kelurahan' => ['required', 'numeric'],
                'file_surat_pengantar' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            ];
        }

        if ($this->jenis_surat->id == 'surat-keterangan-kematian') {
            $rules = [
                'keperluan' => ['required', 'string', 'max:255'],
                'nama' => ['required', 'string', 'max:255'],
                'bin_binti' => ['required', 'string', 'max:255'],
                'nik' => ['required', 'digits:16'],
                'id_jenis_kelamin' => ['required', 'numeric'],
                'tempat_lahir' => ['required', 'string', 'max:255'],
                'tanggal_lahir' => ['required', 'date_format:Y-m-d'],
                'id_kewarganegaraan' => ['required', 'numeric'],
                'id_agama' => ['required', 'numeric'],
                'id_status_perkawinan' => ['required', 'numeric'],
                'id_pekerjaan' => ['required', 'numeric'],
                'alamat' => ['required', 'string'],
                'rt' => ['required', 'digits:3'],
                'rw' => ['required', 'digits:3'],
                'kode_pos' => ['required', 'digits:5'],
                'id_provinsi' => ['required', 'numeric'],
                'id_kab_kota' => ['required', 'numeric'],
                'id_kecamatan' => ['required', 'numeric'],
                'id_kelurahan' => ['required', 'numeric'],
                'tanggal_meninggal' => ['required', 'date_format:Y-m-d'],
                'jam_meninggal' => ['required', 'date_format:H:i'],
                'tempat_meninggal' => ['required', 'string'],
                'sebab_kematian' => ['required', 'string'],
                'file_surat_pengantar' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            ];
        }

        if ($this->jenis_surat->id == 'surat-keterangan-tidak-mampu') {
            $rules = [
                'keperluan' => ['required', 'string', 'max:255'],
            ];
        }

        if ($this->jenis_surat->id == 'surat-pengantar-pembuatan-ktp') {
            $rules = [
                'keperluan' => ['required', 'string', 'max:255'],
                'file_pendukung' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            ];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'keperluan' => 'Keperluan',
            'file_surat_pengantar' => 'Surat Pengantar RT/RW',
            'file_surat_permohonan' => 'Surat Permohonan',
            'file_surat_kuasa' => 'Surat Kuasa',
            // Kelahiran
            'anak_ke' => 'Anak ke',
            'jam_lahir' => 'Jam Lahir',
            'berat_badan' => 'Berat Badan',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            // Kematian
            'nama' => 'Nama',
            'bin_binti' => 'Bin/Binti',
            'nik' => 'NIK',
            'id_jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'id_kewarganegaraan' => 'Kewarganegaraan',
            'id_agama' => 'Agama',
            'id_status_perkawinan' => 'Status Perkawinan',
            'id_pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'rt' => 'RT',
            'rw' => 'RW',
            'kode_pos' => 'Kode POS',
            'id_provinsi' => 'Provinsi',
            'id_kab_kota' => 'Kabupaten/Kota',
            'id_kecamatan' => 'Kecamatan',
            'id_kelurahan' => 'Kelurahan/Desa',
            'tanggal_meninggal' => 'Tanggal Meninggal',
            'jam_meninggal' => 'Jam Meninggal',
            'tempat_meninggal' => 'Tempat Meninggal',
            'sebab_kematian' => 'Sebab Kematian',
            // Pembuatan KTP
            'file_pendukung' => 'Dokumen Pendukung',
        ];
    }
}
