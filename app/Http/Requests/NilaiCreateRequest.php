<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NilaiCreateRequest extends FormRequest
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
            'nilai' => 'required|max:2',
            'mapel_id' => 'required',
            // 'student_id' => 'required|unique:nilai',
        ];
    }

    public function messages(): array
    {
        return [
            'nilai.required' => 'Nilai siswa wajib diisi.!',
            'nilai.max' => 'Nilai tidak boleh lebih dari :max digit.!',
            'mapel_id.required' => 'Mata pelajaran wajib diisi.!',
        ];
    }
}