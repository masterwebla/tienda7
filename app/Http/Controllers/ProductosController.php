<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
    	$productos= Producto::all();
    	return view('tienda.index',compact('productos'));  	
    }
    public function show($id){
    	$producto= Producto::where('id',$id)->first();
    	return view('tienda.detalles',compact('producto'));  	
    }
}