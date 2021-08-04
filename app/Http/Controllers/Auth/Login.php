<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cliente as Clientes;
use App\Models\Funcionario as Funcionarios;
use App\Models\unidade as Unidades;
use App\Models\Modelo as Model;
use App\Models\Linha as Linha;
use App\Models\Material as Material;
use App\Models\Orcamento as Orcamento;

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
            $clientes = Clientes::all();
            $funcionarios = Funcionarios::all();
            $unidades = Unidades::all();
            $modelos = Model::all();
            $linhas = Linha::all();
            $orcamentos = Orcamento::all();
            $materiais = Material::all();
            return view('user/dashboard', [
                'user' => Auth::user(),
                'clientes' => count($clientes),
                'funcionarios' => count($funcionarios),
                'unidades' => count($unidades),
                'modelos' => count($modelos),
                'linhas' => count($linhas),
                'materiais' => count($materiais),
                'orcamentos' => count($orcamentos),
                'dataPoints' => $dataPoints,
            ])->with('succes','Login Realizado!');
        }
        return redirect()->route('login')->with('error','Credenciais inválidas!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
