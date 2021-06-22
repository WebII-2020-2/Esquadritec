<?php

namespace App\Http\Controllers\Linha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Linha as Linhas;

class Linha extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $linha = Linhas::all();
            return view('linha/listLinha', ['linhas'=>$linha]);
        }catch(Exception $e){
            return redirect()->route('dashboard')->with('error', 'Falha de rede!');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linha/formLinha');
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
            $linha = new Linhas($request->except(['_token']));
            $linha->save();
            return redirect()->route('list_linha')->with('succes', 'Cadastrado!');
        }catch(Exception $e){
            return redirect()->route('list_linha')->with('error', 'Falha de rede!');
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
            $linha = Linhas::where('id', $id)->first();
            return view('linha/showLinha', ['linha'=>$linha]);
        }catch(Exception $e){
            return redirect()->route('list_linha')->with('error', 'Falha de rede!');
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
            $linha = Linhas::where('id', $id)->first();
            return view('linha/editLinha', ['linha'=>$linha]);
        }catch(Exception $e){
            return redirect()->route('list_linha')->with('error', 'Falha de rede!');
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
            $id = $request->id;
            Linhas::where('id', $id)->update($request->except(['_token', 'id']));
            return redirect()->route('list_linha')->with('succes', 'Atualizado!');
        }catch(Exception $e){
            return redirect()->route('list_linha')->with('error', 'Falha de rede!');
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
            Linhas::where('id', $id)->delete();
            return redirect()->route('list_linha')->with('succes', 'Deletado!!');
        } catch (Exception $e) {
            return redirect()->route('list_linha')->with('error', 'Falha de rede!');
        }
    }
}
