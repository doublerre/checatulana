<?php

namespace App\Http\Requests\Fondo3;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserMFile extends FormRequest
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
            'file' => 'required|mimes:pdf|max:32768'
        ];
    }

    public function messages()
    {
        return [
        'file.max' => 'El tamaño máximo del archivo para cargar es de 32MB (32,768 KB). Si está cargando una archivo, intente reducir su tamaño para que sea inferior a 32MB',
        ];
    }
}
