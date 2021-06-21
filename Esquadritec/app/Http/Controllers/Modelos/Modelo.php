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
        return view('modelo/listModel', ['Modelos' => $modelo]);
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
        try {
            $modelo = new Model($request->except(['_token']));
            $modelo->save();
<<<<<<< HEAD
            return redirect()->route('listModelo')->with('succes', 'cadastrado');
        } catch (Exception $e) {
            return redirect()->route('listModelo')->with('error', 'Falha de rede!');
=======
            return redirect()->route('list_modelo')->with('succes', 'cadastrado');
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
>>>>>>> 7b35e975d2f179b9eeaa2f675eba2da205b09059
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
            $modelo = Model::where('id', $id)->first();
<<<<<<< HEAD
            return view('modelo/showModel', ['modelo' => $modelo]);
        } catch (Exception $e) {
            return redirect()->route('listModelo')->with('error', 'Falha de rede!');
=======
            return view('modelo/showModel', ['modelo'=>$modelo]);
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
>>>>>>> 7b35e975d2f179b9eeaa2f675eba2da205b09059
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
            $modelo = Model::where('id', $id)->first();
<<<<<<< HEAD
            return view('modelo/editModelo', ['modelo' => $modelo]);
        } catch (Exception $e) {
            return redirect()->route('listModelo')->with('error', 'Falha de rede!');
=======
            return view('modelo/editModelo', ['modelo'=>$modelo]);
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
>>>>>>> 7b35e975d2f179b9eeaa2f675eba2da205b09059
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
            $modelo = Model::where('id', $request->id)->update(['modelo' => $request->modelo]);
<<<<<<< HEAD
            return redirect()->route('listModelo')->with('succes', 'Atualizado');
        } catch (Exception $e) {
            return redirect()->route('listModelo')->with('error', 'Falha de rede!');
=======
            return redirect()->route('list_modelo')->with('succes', 'Atualizado');
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
>>>>>>> 7b35e975d2f179b9eeaa2f675eba2da205b09059
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
            $modelo = Model::where('id', $id)->delete();
<<<<<<< HEAD
            return redirect()->route('listModelo')->with('succes', 'Deletado!!');
        } catch (Exception $e) {
            return redirect()->route('listModelo')->with('error', 'Falha de rede!');
=======
            return redirect()->route('list_modelo')->with('succes', 'Deletado!!');
        }catch(Exception $e){
            return redirect()->route('list_modelo')->with('error', 'Falha de rede!');
>>>>>>> 7b35e975d2f179b9eeaa2f675eba2da205b09059
        }
    }
}