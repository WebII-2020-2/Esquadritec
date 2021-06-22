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

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $funcionarios = Funcionarios::all();
        $unidades = Unidades::all();
        $modelos = Model::all();
        return view('user/dashboard', [
            'user' => Auth::user(),
            'clientes' => count($clientes),
            'funcionarios' => count($funcionarios),
            'unidades' => count($unidades),
            'modelos' => count($modelos),
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
        // $user = Users::get();
        return view('user/show', ['user' => $user]);
        // dd($user);
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
