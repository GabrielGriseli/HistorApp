<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagemRequest extends FormRequest
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
            'nome' =>'required',
            'link_imagem' =>'required',
            'dt_entrevista' =>'required',
            'descricao' =>'required',
            'extra_info' =>'required',
            'id_cidade' =>'required',
        ];
    }
}