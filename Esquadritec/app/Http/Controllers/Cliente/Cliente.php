<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\cliente as Clientes;
use App\Models\endereco as Endereco;
use App\Models\Telefone as Telefone;

class Cliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente/new_cliente');
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
            $cliente = array(
                'name'=>$request->name,
                'cpf'=>$request->cpf,
                'cnpj'=>$request->cnpj,
                'email'=>$request->email,
            );
            $new_cliente = new Clientes($cliente);
            $new_cliente->save();

            // dd($new_cliente->id);

            $endereco = array(
                'cidade'=>$request->cidade,
                'rua'=>$request->rua,
                'cliente'=>$request->cliente,
                'bairro'=>$request->bairro,
                'numero'=>$request->numero,
                'observacao'=>$request->observacao,
                'cliente'=>$new_cliente->id,
            );
            
            $new_endereco = new Endereco($endereco);
            $new_endereco->save();

            $telefone = array(
                'numero'=>$request->telefone,
                'cliente'=>$new_cliente->id,
            );
            
            $new_telefone = new Telefone($telefone);
            $new_telefone->save();

            return redirect()->route('dashboard')->with('succes', 'cadastrado');
        } catch(Throwable $e) {
            return redirect()->route('dashboard')->withErrors('Erro ao registrar');
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
        $cliente = Clientes::where('id', $id)->first();
        $endereco = $cliente->endereco()->first();
        return view('cliente/show', ['cliente' => $cliente, 'endereco' => $endereco]);
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
