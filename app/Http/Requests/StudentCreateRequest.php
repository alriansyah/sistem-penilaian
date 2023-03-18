<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'nis' => 'required|unique:students|max:11',
            'no_hp' => 'required|unique:students|max:100',
            'alamat' => 'required|max:100',
            'foto' => '',
            'email' => 'required|unique:students|unique:users',
            'password' => 'required',
            'role_id' => 'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'role_id' => 'role',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.!',
            'gender.required' => 'Jenis Kelamin wajib diisi.!',
            'nis.required' => 'NIS wajib diisi.!',
            'nis.unique' => 'NIS sudah digunakan user lain.!',
            'nis.max' => 'NIS tidak boleh lebih dari :max digit.!',
            'no_hp.required' => 'Nomor HP wajib diisi.!',
            'no_hp.unique' => 'Nomor HP sudah digunakan user lain.!',
            'no_hp.max' => 'Alamat terlalu panjang.!',
            'alamat.required' => 'Alamat wajib diisi.!',
            'alamat.max' => 'Alamat terlalu panjang.!',
            'email.required' => 'Email wajib diisi.!',
            'email.unique' => 'Alamat email sudah digunakan user lain.!',
            'password.required' => 'Password Nama wajib diisi.!',
            'role_id.required' => 'Role wajib diisi.!',
        ];
    }
}