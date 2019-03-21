<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerificarClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|max:20|min:5|alpha',
            'apellido' => 'required|max:20',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es requerido',
            'nombre.max' => 'El :attribute no puede exceder los 20 digitos',
            'nombre.min' => 'El :attribute debe tener como minimo 5 digitos',
            'nombre.alpha' => 'El :attribute alpha',
            'apellido.required' => 'El :attribute es requerido',
            'apellido.max' => 'El :attribute no puede exceder los 20 digitos',
        ];
    }
}


// 'idCliente', 'nombre','apellido','correo', 'celular','calificacion','numeroViajes', 'tipoDocumento', 'documento',
//                            'fechaRegistro','fechaNacimiento','contrasena'

