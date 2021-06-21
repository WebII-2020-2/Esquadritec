<?php

namespace App\Http\Controllers\materiais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\unidade as Unidades;

class Material extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidades::all();
        // $unidades=['Kg', 'Cm', 'mm', 'm'];
        dd($unidades);
        return view('materiais/newMaterial', ['unidades' => $unidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiais/newMaterial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMaterial(Request $request)
    {
        $material = new Material();
        $material->nome = $request->nome;
        $material->valor = $request->valor;
        $material->unidade_medida = $request->unidade_medida;
        $material->save();
        dd($material);

        var_dump($request->all());

        // return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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