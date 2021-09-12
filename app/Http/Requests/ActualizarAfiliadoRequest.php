<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ActualizarAfiliadoRequest extends FormRequest
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
            'cedula' => "required|unique:afiliados,cedula,".$this->route('afiliado')->id, 
            'correo' => "required|unique:afiliados,correo,".$this->route('afiliado')->id, 
            'unidad' => "required", 
            'telf_oficina' => "required", 
            'telf_habitacion' => "required", 
            'region' => "required", 
            'cargo' => "required", 
            'grado' => "required", 
            'sueldo' => "required", 
            'banco' => "required", 
            'cuenta' => [
                'required',
                Rule::unique('afiliados','cuenta')->ignore($this->afiliado)
            ]
            /* 'cuenta' => "required|unique:afiliados,cuenta,{$this->afiliado->id}" */, 
        ];
    }
}
