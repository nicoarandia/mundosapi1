<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
/**Recordar que siempre importar el modelo provincia */  
use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Para traer un campo especifico de provincia
        /**$provincias = Provincia::selec('nombre')->get();*/
        /**Trae todo los campos de la tabla provincia */
        $provincias = Provincia::all();
        
        return response()->json($provincias);

        /** Dos maneras de mostrar los datos como arriba y abajo con los return */

        /**return response()->json([
            'mensaje' => 'Listado de provincia',
            'data' => $provincias
        ]);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**'$request son los datos que recibo de post' */
    public function store(Request $request)
    {
        /**Recibe una peticion se encuentra con variable provincia y use el modelo provincia
         * y que cree una provincia con el valor de request
         * la variable $provincia guarda que id se le asigno
         * feche de creacion, fecha actualizacion
         * 
         */
        $provincia = Provincia::create([
            /**lado izquierdo nombre de la columna que tenemos en modelo */
            /**lado derecho '$request' y el mismo nombre que pusimos en modelo para buena practica */
            'nombre' => $request['nombre'],
            'index_id' => $request['index']
        ]);
        /** muestra la provincia que se inserto y el msj */
        return response([
            'mensaje' => 'La provincia se agrego correctamente',
            'data' => $provincia
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincia $provincia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincia)
    {
        //
    }
    /**Nombre de la funcion ''getProvinciaSinParametro */
    public function getProvinciaSinParametro()
    {
        $client = new Client();
        $res = $client->request('GET', "https://apis.datos.gob.ar/georef/api/municipios?provincia=22&campos=id,nombre&max=100"); 
        
        $provincias = json_decode ($res->getBody(),true);
        
        return response($provincias['municipios']);
        
    }

    public function getProvinciaConParametro(int $id)
    {
        $client = new Client();
        $res = $client->request('GET', "https://apis.datos.gob.ar/georef/api/municipios?provincia={$id}&campos=id,nombre&max=100"); 
        
        $provincias = json_decode ($res->getBody(),true);
        
        return response()->json($provincias['municipios']);
        
    }

    public function getProvinciaAlternativa(int $id = 22)
    {
        $client = new Client();
        $res = $client->request('GET', "https://apis.datos.gob.ar/georef/api/municipios?provincia={$id}&campos=id,nombre&max=100"); 
        
        $provincias = json_decode ($res->getBody(),true);
        
        return response()->json($provincias['municipios']);
        
    }
}
