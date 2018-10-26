<?php

namespace Farmaceutic\Http\Requests;

use Farmaceutic\Http\Requests\Request;

class ProductoRequestCreate extends Request
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
            'nombre' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'precio' => 'required|regex:/^[0-9]+[.][0-9]{2}$/',
            'max_bodega' => 'required|max:1000',
            'min_bodega' => 'required|min:100',
            'punto_m_bodega' => 'required|max:500',
            
        ];
    }
}
