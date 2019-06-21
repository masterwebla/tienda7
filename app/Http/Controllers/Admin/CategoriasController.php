<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriasController extends Controller
{

    public function index()
    {
        $categorias= Categoria::all();
        //return $categorias;
        return view('admin.categorias.index',compact('categorias'));
    }

    public function create()
    {
        return view('admin.categorias.crear');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
          'nombre' => 'required|unique:categorias|max:255',
          'descripcion' => 'required',
        ]);

        Categoria::create([
            'nombre'=> $request->get('nombre'),
            'descripcion'=> $request->get('descripcion')
        ]);
        return redirect()->route('categorias.index');
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.editar', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $this->validate($request, [
          'nombre' => 'required|max:255',
          'descripcion' => 'required',
        ]);

        $categoria->fill($request->all());
        $categoria->save();
        return redirect()->route('categorias.index');

    }

    public function destroy(Categoria $categoria)
    {
        //
    }
}
