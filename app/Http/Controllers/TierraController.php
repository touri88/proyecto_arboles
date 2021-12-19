<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TierraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $provincia = $request->get("provincia_tierra");
        $localidad = $request->get("localidad_tierra");
        $tipo = $request->get("tipo_tierra");

        $tierra = DB::table("tierra")->select("*")
                                    ->where("provincia_tierra","like" , "%".$provincia. "%")
                                    ->where("localidad_tierra", "like", "%".$localidad. "%")
                                    ->where("tipo_tierra", "like", "%".$tipo. "%")
                                    ->get();

        $parametro = [
            "tierra" => $tierra,
            "titulo" => "Espacios disponibles para plantar"

        
        ];
        return view("tierra.tierra", $parametro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametros = [
            "titulo" => "Ofrecer espacio para plantar"
        ];
        return view("tierra.nuevotierra", $parametros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request->post("tipo_tierra");
        $userarbol =  $request->post("user_tierra");
        $provincia = $request->post("provincia_tierra");
        $localidad = $request->post("localidad_tierra");
        
        
        DB::table("tierra")->insert([
            "tipo_tierra" => $tipo,
            "provincia_tierra" => $provincia,
            "localidad_tierra" => $localidad,
            "user_tierra" => $userarbol
            
        ]);
        
        return redirect()->route("tierra.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("tierra.detalletierra");
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
