<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\passwordEnvio;
class MailController extends Controller
{
    public function enviaCorreo(Request $request, $user){
        
        // Mail::to($request->user())->send(new CorreoRegistro());
        Mail::to($user)->send(new passwordEnvio($request->to));
        return response()->json(["to"=>$request->to], 200);
        }
}
