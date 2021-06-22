<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User as Users;

use App\Models\cliente as Clientes;
use App\Models\Funcionario as Funcionarios;
use App\Models\unidade as Unidades;
use App\Models\Modelo as Model;
use App\Models\Linha as Linha;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('user/dashboard', [
            'user' => Auth::user(),
            'clientes' => count($clientes),
            'funcionarios' => count($funcionarios),
            'unidades' => count($unidades),
            'modelos' => count($modelos),
            'linhas' => count($linhas),
            'dataPoints' => $dataPoints,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/new_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            if($request->password != $request->password_2){
                return redirect()->route('user_create')->withErrors('Senhas não Batem');
            }
            $user = new Users($request->except(['_token']));
    
            $user->save();
            return redirect()->route('dashboard')->with('succes', 'cadastrado');
        }catch(Exception $e){
            return redirect()->route('dashboard')->withErrors('Falha de rede!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::where('id', $id)->first();
        return view('user/showUser', ['user' => $user]);
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
