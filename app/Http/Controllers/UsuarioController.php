<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Arr;
use App\Password;
use Illuminate\Support\Facades\Mail;
Use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UsuarioController extends Controller
{
    public function userform()
    {
        return view('inicio');
    }
    public function save(Request $request)
    {
        $validator = $this->validate($request, 
        [
           'correo'=>'required|string|max:255' 
        ]
    );
        $userdata = request()->except('_token', 'favorito');
        Usuario::insert($userdata);
        $array = ['8L1O3A', '2W972Q', '32K05L', 'Z34Y8H', '5A67S3', 'AP201G', '1E39A2', 'WT32Q1', '30SL6D'];
            $pass = Arr::random($array);
            $request->merge(['to'=>$pass]);
            
            DB::insert('insert into contraseñas (Password) values (?)', [$pass]);

            $mail = app('App\Http\Controllers\MailController')->enviaCorreo($request, $userdata)->getOriginalContent();
        return view('verificacion');

    }
    public function verificar(Request $request)
    {
        $hi = request()->except('_token', 'favorito');
        $first = Arr::first($hi);
        $results = DB::select('select * from contraseñas where Password = :Password', ['Password' => $first]);
        
       if($results)
        {
            if($first == $results[0]->Password)
            {
                return view('welcome');
            }    
        }
        return response()->json(['messeage' => 'No se encuentra el producto '],200); 
    }




/* ----------------- BACK END -------------------------- */

    
    public function verificarbackend(Request $request)
    {
        $hi = $request->codigo;
        $results = DB::select('select * from contraseñas where Password = :Password', ['Password' => $hi]);
        return $results;
        if($results)
        {
            if($hi == $results[0]->Password)
            {
                return response()->json(['messeage' => 'Si se encuentra'],400); 
            }    
        }
        return response()->json(['messeage' => 'No se encuentra el producto '],200); 
       
    }


    public function registro(Request $request){
       /* $request->validate([
            'correo' => 'required|email',
        ]);
        */
        $user = new Usuario();
        $user->correo = $request->correo;
        
        if ($user->save())
            $array = ['8L1O3A', '2W972Q', '32K05L', 'Z34Y8H', '5A67S3', 'AP201G', '1E39A2', 'WT32Q1', '30SL6D'];
            $pass = Arr::random($array);
            $request->merge(['to'=>$pass]);
            
            DB::insert('insert into contraseñas (Password) values (?)', [$pass]);

            $mail = app('App\Http\Controllers\MailController')->enviaCorreo($request, $user)->getOriginalContent();
            return response()->json([$user],202);

        return abort(422, "fallo al insertar");
    }
}
