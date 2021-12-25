<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TierraController extends Controller
{
    
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

    
    public function create()
    {
        $parametros = [
            "titulo" => "Ofrecer espacio para plantar"
        ];
        return view("tierra.nuevotierra", $parametros);
    }

    
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

   
    public function show($id)
    {
        $tierra= DB::select("SELECT * FROM arboles.tierra 
                            INNER JOIN arboles.users 
                            ON arboles.tierra.user_tierra=arboles.users.id 
                            WHERE idtierra= $id;");
        
        $parametro = [
            "tierra" => $tierra,
            "titulo" => "Detalle de espacio para plantar"
       
        ];   
        
        return view("tierra.detalletierra", $parametro);
    
    }

   
    public function edit($id)
    {
        $tierra= DB::select("SELECT * FROM arboles.tierra WHERE idtierra= $id");
        
        $parametro = [
            "tierra" => $tierra,
            "titulo" => "Listado de espacios para plantrar"

        
        ];   


        return view('tierra.edit', $parametro);
    }

 
    public function update(Request $request, $id)
    {
        $tipo = $request->post("tipo_tierra");
        $usertierra =  auth()->user()->id;
        $provincia = $request->post("provincia_tierra");
        $localidad = $request->post("localidad_tierra");
        
        
        DB::table("tierra")->where("idtierra","like" , $id)->update([
            "tipo_tierra" => $tipo,
            "provincia_tierra" => $provincia,
            "localidad_tierra" => $localidad,
            "user_tierra" => $usertierra
            
        ]);
        
        return redirect()->route("profile.index");
    }

   
    public function destroy($id)
    {
        DB::select("DELETE FROM arboles.tierra WHERE idtierra= $id");
        return redirect()->route("profile.index");
    }

}
