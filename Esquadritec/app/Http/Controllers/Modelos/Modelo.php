<?php

namespace App\Http\Controllers\Modelos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelo as Model;

class Modelo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelo = Model::all();
        return view('modelo/listModel', ['Modelos'=>$modelo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelo/formModelo');
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
            $modelo = new Model($request->except(['_token']));
            $modelo->save();
            return redirect()->route('list_modelo')->with('succes', 'cadastrado');
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
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
        try{
            $modelo = Model::where('id', $id)->first();
            return view('modelo/showModel', ['modelo'=>$modelo]);
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
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
        try{
            $modelo = Model::where('id', $id)->first();
            return view('modelo/editModelo', ['modelo'=>$modelo]);
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
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
        try{
            $modelo = Model::where('id', $request->id)->update(['modelo' => $request->modelo]);
            return redirect()->route('list_modelo')->with('succes', 'Atualizado');
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
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
        try{
            $modelo = Model::where('id', $id)->delete();
            return redirect()->route('list_modelo')->with('succes', 'Deletado!!');
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
        }
    }
}
