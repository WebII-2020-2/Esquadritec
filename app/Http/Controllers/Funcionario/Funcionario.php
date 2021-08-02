<?php

namespace App\Http\Controllers\Funcionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Funcionario as Funcionarios;

class Funcionario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionarios::all();
        return view('funcionario/listFuncionario', ['funcionarios'=>$funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario/formFuncionario');
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
                return redirect()->route('new_funcionario')->with('error','Senhas não Batem');
            }
            $newUser= Array(
                'name'=>$request->name,
                'email'=>$request->email,
                'admin'=>isset($request->admin)?$request->admin: 0,
                'password'=>$request->password,
            );
            $funcionarios = new Funcionarios($newUser);
            $funcionarios->save();
            return redirect()->route('list_funcionario')->with('succes', 'cadastrado');
        }catch(Exception $e){
            return redirect()->route('new_funcionario')->with('error', 'Falha ao registrar!');
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
        try {
            $funcionario = Funcionarios::where('id', $id)->first();
            return view('funcionario/showFuncionario', ['funcionario' => $funcionario]);
        } catch (Exception $e) {
            return redirect()->route('list_funcionario')->with('error', 'Falha de rede!');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $funcionario = Funcionarios::where('id', $id)->first();
            return view('funcionario/editFuncionario', ['funcionario' => $funcionario]);
        } catch (Exception $e) {
            return redirect()->route('list_funcionario')->with('error', 'Falha de rede!');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            Funcionarios::where('id', $request->id)->update($request->except(['_token']));
            return redirect()->route('list_funcionario')->with('succes', 'Atualizado');
        } catch (Exception $e) {
            return redirect()->route('list_funcionario')->with('error', 'Falha de rede!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $funcionario = Funcionarios::where('id', $id)->delete();
            return redirect()->route('list_funcionario')->with('succes', 'Deletado!!');
        } catch (Exception $e) {
            return redirect()->route('list_funcionario')->with('error', 'Falha de rede!');
        }
    }
}
