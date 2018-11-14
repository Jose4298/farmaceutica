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
            'nombre' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'precio' => 'required',
            'max_bodega' => 'required',
            'min_bodega' => 'required',
            'punto_m_bodega' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif',
            
            
        ];
    }
}
