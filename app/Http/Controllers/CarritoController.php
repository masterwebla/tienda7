<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Producto;

class CarritoController extends Controller
{
    public function __construct(){
    	if(!\Session::has('carrito')) \Session::put('carrito',array());
    }

    //Mostrar el carrito
    public function show(){
    	$carrito= \Session::get('carrito');
    	$total= $this->total();
    	return view('tienda.carrito',compact('carrito','total'));
    }

    //Agregar un item
    public function add(Producto $producto){
    	$carrito= \Session::get('carrito');
    	$producto->cantidad = 1;
    	$carrito[$producto->id] = $producto;
    	\Session::put('carrito',$carrito);
    	//return \Session::get('carrito');
    	return redirect()->route('carrito');
    }

    //Borrar un item
    public function delete(Producto $producto){
    	$carrito= \Session::get('carrito');
    	unset($carrito[$producto->id]);
    	\Session::put('carrito',$carrito);
    	return redirect()->route('carrito');
    }

    //Actualizar un item
    public function update(Producto $producto, $cantidad){
    	$carrito= \Session::get('carrito');
    	$carrito[$producto->id]->cantidad = $cantidad;
    	\Session::put('carrito',$carrito);
    	return redirect()->route('carrito');
    }

    //Vaciar carrito
    public function trash(){
    	\Session::forget('carrito');
    	return redirect()->route('carrito');
    }

    //Calcular el total
    private function total(){
    	$carrito= \Session::get('carrito');
    	$total=0;
    	foreach($carrito as $item){
    		$total+= $item->precio * $item->cantidad;
    	}
    	return $total;
    }
    //Detalles del pedido
    public function ordenDetalles(){
        if(count(\Session::get('carrito'))<=0) 
            return redirect()->route('inicio');
        $carrito= \Session::get('carrito');
        $total= $this->total();
        return view('tienda.orden-detalles',compact('carrito','total'));
    }

}
