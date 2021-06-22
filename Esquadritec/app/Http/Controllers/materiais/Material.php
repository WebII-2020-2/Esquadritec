<?php

namespace App\Http\Controllers\materiais;

use App\Http\Controllers\Controller;
use App\Models;
use App\Models\Material as Materiais;
use App\Models\unidade;
use Illuminate\Http\Request;

class Material extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiais = Materiais::all();
        foreach ($materiais as $key => $material) {
            $materiais[$key]->unidade_medida = unidade::where('id', $material->unidade_medida)->first();
        }
        return view('materiais/listMaterial', [
            'materiais' => $materiais,
        ]);

        // dd($materiais);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = unidade::all();
        return view('materiais/newMaterial', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $new_material = new Materiais($request->except(['_token']));
            $new_material->save();
            return redirect()->route('listMaterial')->with('succes', 'cadastrado');
        } catch (Expection $e) {

            return redirect()->route('listMaterial')->with('error', 'Falha de rede!');
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

            $materiais = Materiais::where('id', $id)->first();
            foreach ($materiais as $key => $material) {
                $materiais[$key]->unidade_medida = unidade::where('id', $material->unidade_medida)->first();
            }
            return view('materiais/show_material', ['material' => $materiais]);
        } catch (Exception $e) {
            return redirect()->route('list_material')->with('error', 'Falha de rede!');
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