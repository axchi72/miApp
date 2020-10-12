<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionAfiliado extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'identidad' => 'required|max:13|unique:afiliados,identidad,' . $this->route('id'),
            'nombre' => 'required|max:100',
            'email' => 'required|email|max:100|unique:afiliados,email,' . $this->route('id'),
            'celular' => 'required|max:15',
            'foto_up' => 'nullable|image|max:1024'
        ];
    }
}
