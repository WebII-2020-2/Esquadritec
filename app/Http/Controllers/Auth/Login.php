<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function loginDo(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){
            // return redirect()->route('dashboard')->with('succes','Login Realizado!');
            $dataPoints = array(
                array("x"=> 19, "y"=> 0),
    
                array("x"=> 20, "y"=> 500),
                array("x"=> 21, "y"=> 650),
    
                array("x"=> 24, "y"=> 770),
                array("x"=> 25, "y"=> 260),
    
                array("x"=> 28, "y"=> 450),
                array("x"=> 29, "y"=> 180),
    
                array("x"=> 32, "y"=> 41),
                array("x"=> 33, "y"=> 770),
    
                array("x"=> 36, "y"=> 170),
                array("x"=> 37, "y"=> 1000),
    
                array("x"=> 40, "y"=> 200),
                array("x"=> 41, "y"=> 600),
    
                array("x"=> 44, "y"=> 41),
                array("x"=> 45, "y"=> 1000),
    
                array("x"=> 48, "y"=> 41),
                array("x"=> 49, "y"=> 500),
    
                array("x"=> 52, "y"=> 80),
                array("x"=> 53, "y"=> 700),
    
                array("x"=> 56, "y"=> 450),
                array("x"=> 57, "y"=> 35),
            );
        //     $clientes = count(Clientes::all());
        //     $funcionarios = count(Funcionarios::all());
        //     $unidades = count(Unidades::all());
        //     $modelos = count(Model::all());
        //     $linhas = count(Linha::all());
        //     $orcamentos = count(Orcamento::all());
        //     $materiais = count(Material::all());
        //     $user =  Auth::user();
        //     return view('user/dashboard', compact(
        //         'user',
        //         'clientes',
        //         'funcionarios',
        //         'unidades',
        //         'modelos',
        //         'linhas',
        //         'materiais',
        //         'orcamentos',
        //         'dataPoints'
        //     ))->with('succes','Login Realizado!');
        // }
        // return redirect()->route('login')->with('error','Credenciais inválidas!');
            $user = Auth::user();
            dd($user);
            return view('user/dashboard', compact('user', 'dataPoints'))->with('succes','Login Realizado!');
        }
        return redirect()->route('login')->with('error','Credenciais inválidas!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
