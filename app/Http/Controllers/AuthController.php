<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function mostrarRegistro(){
      return view('auth.registro');
    }

    public function mostrarLogin(){
      return view('auth.login');
    }

    public function registro(Request $request){
      $user = User::create($request->merge(['role' => 2])->all());

      if($user){
        Auth::login($user, true);
        return redirect()->route('inicio');
      }

      return redirect()->route('mostar.registro')->with('error', 'Error Validando Registro');
    }

    public function login(Request $request){
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials, true)) {
        return redirect()->route('inicio');
      }

      return redirect()->route('mostar.login')->with('error', 'Error autenticando');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('inicio');
    }
}
