<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class SessionsController extends Controller
{
    
    public function index()
    {
        $id= auth()->user()->id;

        $arboles = DB::select("SELECT * FROM arboles.arbol WHERE user_arbol= $id");
        $tierra =  DB::select("SELECT * FROM arboles.tierra WHERE user_tierra= $id");
        
        $parametro = [
            "arboles" => $arboles,
            "tierra" => $tierra,
            "titulo" => "Mis arboles ofrecidos",
            "titulo2" => "Espacios disponibles en tierra"

        
        ];

        
        return view("auth.profile", $parametro );
    }

   
    public function create() /*CREAR NUEVO USER*/
    {
        return view('auth.login');
    }

    
    public function store(Request $request)
    {
        if(auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos, intentalo de nuevo'
            ]); /*VALIDACION DE MAIL Y CONTRASEÑA*/
        }
        return redirect()->to('/');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    } /*CERRAR SESION*/
}
