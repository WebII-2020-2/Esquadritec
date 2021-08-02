<?php
namespace App\Http\Controllers\Unidade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\unidade as Medida;

class Unidade extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $unidade = Medida::all();
            return view('unidade/listUnidade', ['unidade'=>$unidade]);
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
        return view('unidade/formUnidade');
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
            $unidade = new Medida($request->except(['_token']));
            $unidade->save();
            return redirect()->route('list_unidade')->with('succes', 'Cadastrado!');
        }catch(Exception $e){
            return redirect()->route('list_unidade')->with('error', 'Falha de rede!');
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
            $unidade = Medida::where('id', $id)->first();
            return view('unidade/showUnidade', ['unidade'=>$unidade]);
        }catch(Exception $e){
            return redirect()->route('list_unidade')->with('error', 'Falha de rede!');
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
            $unidade = Medida::where('id', $id)->first();
            return view('unidade/editUnidade', ['unidade'=>$unidade]);
        }catch(Exception $e){
            return redirect()->route('list_unidade')->with('error', 'Falha de rede!');
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
            Medida::where('id', $id)->update($request->except(['_token', 'id']));
            return redirect()->route('list_unidade')->with('succes', 'Atualizado!');
        }catch(Exception $e){
            return redirect()->route('list_unidade')->with('error', 'Falha de rede!');
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
            Medida::where('id', $id)->delete();
            return redirect()->route('list_unidade')->with('succes', 'Deletado!!');
        } catch (Exception $e) {
            return redirect()->route('list_unidade')->with('error', 'Falha de rede!');
        }
    }
}
