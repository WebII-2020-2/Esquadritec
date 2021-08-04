<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente as Clientes;
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
        $cliente = Clientes::all();
        return view('cliente/list_client', [
            'cliente' => $cliente,
        ]);
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
        try{
            $cliente = Clientes::where('id', $id)->first();
            $endereco = Endereco::where('cliente', 1)->get();
            $telefone = Telefone::where('cliente', $id)->get();
            return view('cliente/showCliente', [
                'cliente' => $cliente,
                'endereco' => $endereco,
                'telefone' => $telefone,
            ]);
        }catch(Exception $e){
            return redirect()->route('list_cliente')->with('error', 'Falha de rede!');
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
            $cliente = Clientes::where('id', $id)->first();
            $endereco = Endereco::where('cliente', $id)->first();
            $telefone = Telefone::where('cliente', $id)->first();
            return view('cliente/edit_cliente', [
                'cliente' => $cliente,
                'endereco' => $endereco,
                'telefone' => $telefone,
            ]);
        }catch(Exception $e){
            return redirect()->route('list_cliente')->with('error', 'Falha de rede!');
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
            $cliente = array(
                'name'=>$request->name,
                'cpf'=>$request->cpf,
                'cnpj'=>$request->cnpj,
                'email'=>$request->email,
            );
            Clientes::where('id', $id)->update($cliente);

            // dd($new_cliente->id);

            $endereco = array(
                'cidade'=>$request->cidade,
                'rua'=>$request->rua,
                'bairro'=>$request->bairro,
                'numero'=>$request->numero,
                'observacao'=>$request->observacao,
            );
            
            Endereco::where('cliente', $id)->update($endereco);

            $telefone = array(
                'numero'=>$request->telefone,
            );
            
            Telefone::where('cliente', $id)->update($telefone);

            return redirect()->route('list_cliente')->with('succes', 'Atualizado');
        } catch(Throwable $e) {
            return redirect()->route('list_cliente')->with('error', 'Falha de rede!');
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
            Clientes::where('id', $id)->delete();
            return redirect()->route('list_cliente')->with('succes', 'Deletado!!');
        }catch(Exception $e){
            return redirect()->route('list_cliente')->with('error', 'Falha de rede!');
        }
    }
}
