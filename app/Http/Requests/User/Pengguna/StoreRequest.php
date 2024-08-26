<?php

namespace App\Http\Requests\User\Pengguna;

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
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:user,email'],
            'role' => ['required', 'string'],
            'password' => ['required', 'min:8', 'string', 'confirmed'],
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama',
            'email' => 'Email',
            'role' => 'Role',
            'password' => 'Password',
        ];
    }
}
