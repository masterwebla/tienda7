<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Producto;

class ProductosController extends Controller
{

    public function index()
    {
        $productos = Producto::orderBy('id','desc')->paginate(10);
        return view('admin.productos.index',compact('productos'));
    }

    public function create()
    {
        $categorias= Categoria::orderBy('id','desc')->pluck('nombre','id');
        return view('admin.productos.crear',compact('categorias'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'nombre' => 'required',
          'descripcion' => 'required',
          'precio' => 'required|numeric',
          'imagen' => 'required',
          'idcategoria' => 'required'
        ]);

        Producto::create([
            'nombre'=> $request->get('nombre'),
            'descripcion'=> $request->get('descripcion'),
            'precio'=> $request->get('precio'),
            'imagen'=> $request->get('imagen'),
            'idcategoria'=> $request->get('idcategoria')
        ]);
        return redirect()->route('productos.index');
    }

    public function show(Producto $producto)
    {
        return $producto;
    }

    public function edit(Producto $producto)
    {
        $categorias= Categoria::orderBy('id','desc')->pluck('nombre','id');
        return view('admin.productos.editar', compact('categorias','producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $this->validate($request, [
          'nombre' => 'required',
          'descripcion' => 'required',
          'precio' => 'required|numeric',
          'imagen' => 'required',
          'idcategoria' => 'required'
        ]);

        $producto->fill($request->all());
        $producto->save();
        $mensaje = $producto ?'Producto actualizado correctamente':'El producto no pudo actualizarse';
        return redirect()->route('productos.index')->with('mensaje',$mensaje);
    }

    public function destroy(Producto $producto)
    {
        $borrado= $producto->delete();
        $mensaje = $borrado ?'Producto eliminado correctamente':'El producto no pudo eliminarse';
        return redirect()->route('productos.index')->with('mensaje',$mensaje);
    }
}
