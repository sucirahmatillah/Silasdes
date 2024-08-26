<?php

namespace App\Http\Requests\User\KantorDesa;

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
        return [
            'kode' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'rt' => ['required', 'digits:3'],
            'rw' => ['required', 'digits:3'],
            'kode_pos' => ['required', 'digits:5'],
            'id_provinsi' => ['required', 'numeric'],
            'id_kab_kota' => ['required', 'numeric'],
            'id_kecamatan' => ['required', 'numeric'],
            'id_kelurahan' => ['required', 'numeric'],
            'telepon' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'website' => ['nullable', 'string', 'max:255'],
            'logo' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            'nama_kepala_desa' => ['required', 'string', 'max:255'],
            'nip_kepala_desa' => ['required', 'string', 'max:255'],
            'ttd_kepala_desa' => ['nullable', 'mimes:png,jpg', 'max:2048'],
        ];
    }

    public function attributes()
    {
        return [
            'kode' => 'Kode',
            'alamat' => 'Alamat',
            'rt' => 'RT',
            'rw' => 'RW',
            'kode_pos' => 'Kode POS',
            'id_provinsi' => 'Provinsi',
            'id_kab_kota' => 'Kab/Kota',
            'id_kecamatan' => 'Kecamatan',
            'id_kelurahan' => 'Kelurahan',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'website' => 'Website',
            'logo' => 'Logo',
            'nama_kepala_desa' => 'Nama Kepala Desa',
            'nip_kepala_desa' => 'NIP Kepala Desa',
            'ttd_kepala_desa' => 'TTD Kepala Desa',
        ];
    }
}
