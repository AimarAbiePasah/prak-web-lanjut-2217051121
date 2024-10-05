<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserControllerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ];
    }

    // Menambahkan custom error messages
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'npm.required' => 'NPM wajib diisi.',
            'kelas_id.required' => 'Kelas wajib dipilih.',
        ];
    }
}
