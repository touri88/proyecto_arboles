<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $provincia = $request->get("provincia_arbol");
        $localidad = $request->get("localidad_arbol");
        $tipo = $request->get("tipo_arbol");

        $arboles= DB::table("arbol")->select("*")
                                    ->where("provincia_arbol","like" , "%".$provincia. "%")
                                    ->where("localidad_arbol", "like", "%".$localidad. "%")
                                    ->where("tipo_arbol", "like", "%".$tipo. "%")
                                    ->get();

        $parametro = [
            "arboles" => $arboles,
            "titulo" => "Listado de arboles"

        
        ];
        return view("arboles.arbol", $parametro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametros = [
            "titulo" => "Crear nuevo Arbol"
        ];
        return view("arboles.nuevoarbol", $parametros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request->post("tipo_arbol");
        $userarbol =  $request->post("user_arbol");
        $provincia = $request->post("provincia_arbol");
        $localidad = $request->post("localidad_arbol");
        
        
        DB::table("arbol")->insert([
            "tipo_arbol" => $tipo,
            "provincia_arbol" => $provincia,
            "localidad_arbol" => $localidad,
            "user_arbol" => $userarbol
            
        ]);
        
        return redirect()->route("arbol.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return view("arboles.detallearbol");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    

}
