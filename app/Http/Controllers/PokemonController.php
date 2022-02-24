<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();

        return $pokemon;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Instanciamos a clase Pokemon
        $pokemon = new Pokemon;
        // Asignamos ao atributo nome o parámetro enviado na Request
        $pokemon->nome = $request->nome;
        $pokemon->descripcion = $request->descripcion;
        $pokemon->tipo = $request->tipo;
        $pokemon->debilidades = $request->debilidades;
        // Gardamos o cambio no modelo
        $pokemon->save();

        return $pokemon;

/**
* Amosar o recurso especificado
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /// Solicitamos ao modelo o Pokemon co id solicitado por GET.
    $pokemon = Pokemon::where('id', $id)->get();
    return response()->json($pokemon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);

        return response()->json($pokemon);

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
        $pokemon = Pokemon::find($id);

        if (isset($request->nome)){
            $pokemon->nome = $request->nome;
        }
        if (isset($request->descripcion)){
        $pokemon->descripcion = $request->descripcion;
        }
        if (isset($request->tipo)){
        $pokemon->tipo = $request->tipo;
        }
        if (isset($request->debilidades)){
            $pokemon->debilidades = $request->debilidades;
        }

        $pokemon->update();

        return response()->json($pokemon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::find($id);

        $pokemon->delete();


    }
}
