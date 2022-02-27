<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libros::all();
        return $libros;
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
        $libros = new Libros();
        $libros->titulo = $request->titulo;
        $libros->autor = $request->autor;
        $libros->genero = $request->genero;
        $libros->sinopsis = $request->sinopsis;
        $libros->año = $request->año;

        $libros->save();
 
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
    public function update(Request $request)
    {
        $libros = Libros::findOrFail($request->id);
        $libros->titulo = $request->titulo;
        $libros->autor = $request->autor;
        $libros->genero = $request->genero;
        $libros->sinopsis = $request->sinopsis;
        $libros->año = $request->año;

        $libros->save();

        return $libros;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $libros = Libros::destroy($request->id);

      return $libros;
    }
}
