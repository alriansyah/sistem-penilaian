<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapelCreateRequest extends FormRequest
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
            'name' => 'required|unique:mata_pelajaran',
            'class_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama jurusan wajib diisi.!',
            'name.unique' => 'Nama mata pelajaran sudah digunakan.!',
            'class_id.required' => 'Nama kelas wajib diisi.!',
        ];
    }
}