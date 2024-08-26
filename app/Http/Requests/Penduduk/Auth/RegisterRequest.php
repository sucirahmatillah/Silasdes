<?php

namespace App\Http\Requests\Penduduk\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nik' => ['required', 'digits:16'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:penduduk,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email sudah terdaftar.',
            'terms.required' => 'Setujui Syarat dan Ketentuan dan Kebijakan Privasi Pendaftaran.',
        ];
    }

    public function attributes()
    {
        return [
            'nik' => 'NIK',
            'nama' => 'Nama',
            'email' => 'Email',
            'password' => 'Password',
            'terms' => 'Syarat dan Ketentuan dan Kebijakan Privasi',
        ];
    }
}
