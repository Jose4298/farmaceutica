<?php

namespace Farmaceutic\Http\Requests;

use Farmaceutic\Http\Requests\Request;

class EmpleadoCreateRequest extends Request
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
            'apellido_p' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'apellido_m' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'calle' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'colonia' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'numero' => 'required|max:7',
            'codigo_postal' => 'required|max:5',
            'telefono' => 'required|max:10',
            'email' => 'required|email',
            'RFC' => 'required|max:12', 
        ];
    }
}
