<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class AfiliadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /* return parent::toArray($request); */
        return [
            'id' => $this->id,
            'Nombre Completo' => Str::upper($this->nombre), 
            'Número de Cédula' => sprintf('%08d', $this->cedula), 
            'Correo Electrónico' => $this->correo, 
            'Unidad' => $this->unidad, 
            'Teléfono de Oficina' => $this->telf_oficina, 
            'Teléfono de Habitación' => $this->telf_habitacion, 
            'Región' => Str::upper($this->region),
            'Cargo' => $this->cargo, 
            'Grado' => $this->grado, 
            'sueldo' => $this->sueldo, 
            'banco' => Str::upper($this->banco), 
            'cuenta' => $this->cuenta, 
            'porcentaje' => $this->porcentaje, 
            'procesado' => $this->procesado, 
            'fecha' => $this->fecha, 
            'capres_procesado' => $this->capres_procesado, 
            'capres_user' => $this->capres_user, 
            'capres_fecha' => $this->capres_fecha
        ];
    }

    public function with($request)
    {
        return [
            'res' => true
        ];

    }
}
