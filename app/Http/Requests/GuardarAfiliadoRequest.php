<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarAfiliadoRequest extends FormRequest
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
        'nombre' => "required", 
        'cedula' => "required|unique:afiliados,cedula", 
        'correo' => "required|unique:afiliados,correo", 
        'unidad' => "required", 
        'telf_oficina' => "required", 
        'telf_habitacion' => "required", 
        'region' => "required", 
        'cargo' => "required", 
        'grado' => "required", 
        'sueldo' => "required", 
        'banco' => "required", 
        'cuenta' => "required|unique:afiliados,cuenta"        
        ];
    }
}
