<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArbolController extends Controller
{
    
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

   
    public function create()
    {
        $parametros = [
            "titulo" => "Crear nuevo Arbol"
        ];
        return view("arboles.nuevoarbol", $parametros);
    }

    
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

    
    public function show($id)
    {
        $arboles= DB::select("SELECT * FROM arboles.arbol 
                            INNER JOIN arboles.users 
                            ON arboles.arbol.user_arbol=arboles.users.id 
                            WHERE idarbol= $id;");
        
        $parametro = [
            "arboles" => $arboles,
            "titulo" => "Detalle de arbol"
       
        ];   
        
        return view("arboles.detallearbol", $parametro);
    }

   
    public function edit($id)
    {   
        $arboles= DB::select("SELECT * FROM arboles.arbol WHERE idarbol= $id");
        
        $parametro = [
            "arboles" => $arboles,
            "titulo" => "Listado de arboles"

        
        ];   


        return view('arboles.edit', $parametro);
    }

   
    public function update(Request $request, $id)
    {
        
        $tipo = $request->post("tipo_arbol");
        $userarbol =  auth()->user()->id;
        $provincia = $request->post("provincia_arbol");
        $localidad = $request->post("localidad_arbol");
        
        
        DB::table("arbol")->where("idarbol","like" , $id)->update([
            "tipo_arbol" => $tipo,
            "provincia_arbol" => $provincia,
            "localidad_arbol" => $localidad,
            "user_arbol" => $userarbol
            
        ]);
        
        return redirect()->route("profile.index");
    }

   
    public function destroy($id)
    {
        DB::select("DELETE FROM arboles.arbol WHERE idarbol= $id");
        return redirect()->route("profile.index");
        
    }
    

}
