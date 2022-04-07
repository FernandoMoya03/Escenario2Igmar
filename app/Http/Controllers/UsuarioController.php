<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Registros;
use Illuminate\Support\Arr;
use App\Password;
use Illuminate\Support\Facades\Mail;
Use DB;
use Illuminate\Support\Facades\Storage;
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
        $userdata = request()->except('_token', 'favorito_');
        Usuario::insert($userdata);
        $array = ['8L1O3A', '2W972Q', '32K05L', 'Z34Y8H', '5A67S3', 'AP201G', '1E39A2', 'WT32Q1', '30SL6D', '83NHFY', 'J80L5V', '4OSN81', 'UR820N', '95UNO4', 'KY87TR','PAU020','M0Y4L0','RON571','U912OD','DM9283','90JTEL','ING5AK'];
            $pass = Arr::random($array);
            $request->merge(['to'=>$pass]);
            
            DB::insert('insert into contraseñas (Password) values (?)', [$pass]);
            //Storage::disk('dgO')->put($pass.'.txt', 'Tu codigo de Acceso es: '.$pass);
            $mail = app('App\Http\Controllers\MailController')->enviaCorreo($request, $userdata)->getOriginalContent();
        return view('verificacion');

    }
    public function verificar(Request $request)
    {
        $hi = request()->except('_token', 'favorito_');
        $first = Arr::first($hi);
        $results = DB::select('select * from contraseñas where Password = :Password', ['Password' => $first]);
        
       if($results)
        {
            if($first == $results[0]->Password)
            {
                return view('welcome');
            }    
        }
        return response()->json(['messeage' => 'No se encuentra el Codigo de Verificacion '],400); 
    }

    public function registrouser()
    {
        return view('regis');
    }
    public function iniciodesesion(Request $request)
    {
        $validator = $this->validate($request, 
        [
           'usuario'=>'required',
           'password'=>'required'
        ]
    );
        $nombre = request()->except('_token', 'favorito_', 'password');
        $first = Arr::first($nombre);
        $results = DB::select('select * from registros where usuario = :usuario', ['usuario' => $first]);
        if($results)
        {
            if($first == $results[0]->usuario)
            {
                $contra = request()->except('_token', 'favorito_', 'usuario');
                $first = Arr::first($contra);
                $results = DB::select('select * from registros where password = :password', ['password' => $first]);
                    if($results)
                    {
                        if($first == $results[0]->password)
                            {
                                return view('inicio');
                            }    
                    }
                return response()->json(['messeage' => 'No se encuentra la contrasena ']); 
            }    
        }
        return response()->json(['messeage' => 'No se encuentra el Usuario ']); 
        
        
    }
    
    public function guardarusuario (Request $request)
    {
        $pedir = request()->except('_token', 'favorito_');
        Registros::insert($pedir);
        return view('iniciodesesion');
    }

    public function returnFileSpaces(Request $request){
        $content = $request->codigo;
        $file = storage::disk('dgO')->get($content.'.txt');
        return response($file);
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
                return response()->json(['messeage' => 'Si se encuentra'],200); 
            }    
        }
        return response()->json(['messeage' => 'No se encuentra el Codigo de Verificacion '],400); 
       
    }


    public function registro(Request $request){
       /* $request->validate([
            'correo' => 'required|email',
        ]);
        */
        $user = new Usuario();
        $user->correo = $request->correo;
        
        if ($user->save())
            $array = ['8FAPS1', '8L1O3A', '2W972Q', '32K05L', 'Z34Y8H', '5A67S3', 'AP201G', '1E39A2', 'WT32Q1', '30SL6D'];
            $pass = Arr::random($array);
            $request->merge(['to'=>$pass]);
            
            DB::insert('insert into contraseñas (Password) values (?)', [$pass]);

            $mail = app('App\Http\Controllers\MailController')->enviaCorreo($request, $user)->getOriginalContent();
            return response()->json([$user],202);

        return abort(422, "fallo al insertar");
    }
}
