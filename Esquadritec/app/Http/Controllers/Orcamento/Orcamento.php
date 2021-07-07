<?php

namespace App\Http\Controllers\Orcamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Linha;
use App\Models\Modelo;
use App\Models\Material;
use App\Models\unidade;
use App\Models\Produto;
use App\Models\Orcamento as Orcament;
use App\Models\materialProduto;
use App\Models\Endereco;

class Orcamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamentos = Orcament::get()->all();
        foreach($orcamentos as $key => $orc){
            $orcamentos[$key]['cliente'] = Cliente::where('id', $orc['cliente'])->first();
            $orcamentos[$key]['cliente']['endereco'] = Endereco::where('cliente', $orcamentos[$key]['cliente']['id'])->get();
            $orcamentos[$key]['quantidade_produto'] = count(Produto::where('orcamento', $orc->id)->get());
        }
        // dd($orcamentos);
        return view('orcamento/list_orcamento', ['orcamentos'=>$orcamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::get()->all();
        $modelos = Linha::get()->all();
        $linhas = Modelo::get()->all();
        session()->put('materiais', []);
        session()->put('newOrcamento',[
            'cliente'=>'',
            'observacao'=>'',
            'valor_total'=>'',
            'valor_final'=>'',
            'produtos'=>[],
            'desconto'=>'',
        ]);
        return view('orcamento/new_orcamento', [
            'clientes'=>$clientes,
            'modelos'=>$modelos,
            'linhas'=>$linhas
        ]);
    }

    public function orcamento_set(Request $request)
    {
        $orcamento = session()->get('newOrcamento');

        $orcamento['cliente'] = Cliente::where('id', $request->cliente)->first();
        $orcamento['observacao'] = $request->observacao;
        $orcamento['desconto'] = intval($request->desconto);

        session()->put('newOrcamento', $orcamento);

        return redirect()->route('orcamento_p');
    }

    public function orcamento_p()
    {
        $orcamento = session()->get('newOrcamento');
        // dd($orcamento);
        return view('orcamento/orcamento_produto', [
            'orcamento'=>$orcamento,
        ]);
    }

    public function orcamento_p_add()
    {
        $linhas = Linha::get()->all();
        $modelos = Modelo::get()->all();
        $materiais = session()->get('materiais');
        return view('orcamento/orcamento_produtoAdd', [
            'linhas'=>$linhas,
            'modelos'=>$modelos,
            'materiais'=>$materiais,
        ]);
    }

    public function orcamento_material()
    {
        $materiais = Material::get()->all();
        return view('orcamento/material_add', [
            'materiais'=>$materiais,
        ]);
    }

    public function orcamento_material_add(Request $request)
    {
        $mat = Material::where('id', $request->material)->first();
        $mat['unidade_medida'] = unidade::where('id', $mat['unidade_medida'])->first();
        $val = [
            'material'=>$mat->toArray(),
            'quantidade'=>$request->quantidade
        ];
        // dd($val);
        $materiais = session()->push('materiais', $val);

        return redirect()->route('orcamento_p_add');
    }

    public function orcamento_p_set(Request $request)
    {
        $orcamento = session()->get('newOrcamento');
        $materiais = session()->get('materiais');
        $modelo = Modelo::where('id', $request->modelo)->first();
        $linha = Linha::where('id', $request->linha)->first();

        $valor = 0;

        foreach($materiais as $mat){
            $valor += $mat['material']['valor'];
        }

        array_push($orcamento['produtos'],[
            'nome'=> $request->nome,
            'linha'=> $linha,
            'modelo'=> $modelo,
            'materiais'=> $materiais,
            'valor'=> $valor
        ]);

        session()->put('newOrcamento', $orcamento);

        $materiais = session()->put('materiais',[]);

        return redirect()->route('orcamento_p');
    }

    public function orcamento_next(Request $request)
    {
        $orcamento = session()->get('newOrcamento');

        $valor_tolal = 0;
        $valor_desconto = 0;

        foreach($orcamento['produtos'] as $prod){
            foreach($prod['materiais'] as $mat){
                $valor_tolal += intval($mat['material']['valor']) * intval($mat['quantidade']);
            }
        }

        $valor_desconto = $valor_tolal - ($valor_tolal*(intval($orcamento['desconto'])/100));

        $orcamento['valor_total'] = $valor_tolal;
        $orcamento['valor_final'] = $valor_desconto;

        session()->put('newOrcamento', $orcamento);

        return view('orcamento/orcamento_previa', ['orcamento' => $orcamento]);
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
            $orcamento = session()->get('newOrcamento');

            $orcamento_set = [
                'cliente' => $orcamento['cliente']->id,
                'observacao' => $orcamento['observacao'],
                'desconto' => $orcamento['desconto'],
                'status' => 'PENDENTE',
                'valor_t_b' => $orcamento['valor_total'],
                'valor_f' => $orcamento['valor_final']
            ];
            $orcamento_set = new Orcament($orcamento_set);
            $orcamento_set->save();

            foreach($orcamento['produtos'] as $pdt){
                $produto = [
                    'orcamento'=> $orcamento_set->id,
                    'modelo'=> $pdt['modelo']['id'],
                    'linha'=> $pdt['linha']['id'],
                    'nome'=> $pdt['nome'],
                    'valor'=> $pdt['valor']
                ];
                $produto = new Produto($produto);
                $produto->save();

                foreach($pdt['materiais'] as $mat){
                    // dd($mat);
                    $materialProduto = [
                        'produto'=> $produto->id,
                        'material'=> $mat['material']['id'],
                        'valor'=> $mat['material']['valor'],
                        'quantidade'=> $mat['quantidade'],
                    ];
                    $materialProduto = new materialProduto($materialProduto);
                    $materialProduto ->save();
                }
            }
            return redirect()->route('dashboard')->with('succes', 'Registrado!');
        }catch(Ecxeption $e){
            return redirect()->route('dashboard')->with('error', 'Falha de rede!');
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
