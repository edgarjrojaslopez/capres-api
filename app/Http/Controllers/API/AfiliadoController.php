<?php

namespace App\Http\Controllers\API;

use App\Models\Afiliado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AfiliadoResource;
use App\Http\Requests\GuardarAfiliadoRequest;
use App\Http\Requests\ActualizarAfiliadoRequest;


class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AfiliadoResource::collection(Afiliado::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarAfiliadoRequest $request)
    {
        
       
           
        return (new AfiliadoResource(Afiliado::create($request->all())))
        ->additional([
            
            'mensaje' => 'Afiliado registrado correctamente'
        ]);
        /* return response()->json([
            'res' => true,
            'msg' => 'Afiliado registrado correctamente.'
        ],200); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliado $afiliado)
    {
        /* return response()->json([
            'res' => true,
            'afiliado' => $afiliado
        ], 201); */
        return new AfiliadoResource($afiliado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarAfiliadoRequest $request, Afiliado $afiliado)
    {
        $afiliado->update($request->all());
      /*  return response()->json([
           'res' => true,
           'mensaje' => 'Afiliado actualizado correctamente'
       ],200); */
       return (new AfiliadoResource($afiliado))
                ->additional([
                    
                    'mensaje' => 'El afiliado '.$afiliado->id. ' se ha actualizado correctamente',
                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliado $afiliado)
    {
        
        /* return response() -> json([
            'res' => true,
            'mensaje' => 'El afiliado '.$afiliado->id. ' se ha eliminado correctamente',
            'afiliado' => $afiliado

        ], 200); */
        $afiliado->delete();
        return (new AfiliadoResource($afiliado))
                ->additional([
                    'mensaje' => 'El afiliado '.$afiliado->id. ' se ha eliminado correctamente',
            'afiliado' => $afiliado
                ]);
    }
}
