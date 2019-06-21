<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::bind('producto',function($id){
	return App\Producto::where('id',$id)->first();
});

Route::bind('categoria',function($id){
	return App\Categoria::where('id',$id)->first();
});


Route::get('/',[
		'as'=>'inicio',
		'uses'=>'ProductosController@index'
	]);
Route::get('camisa/{idproducto}',[
		'as'=>'producto-detalles',
		'uses'=>'ProductosController@show'
	]);

//Rutas para el carrito de compras
Route::get('carrito',[
		'as'=>'carrito',
		'uses'=>'CarritoController@show'
	]);

Route::get('carrito/agregar/{producto}',[
		'as'=>'carrito-agregar',
		'uses'=>'CarritoController@add'
	]);
Route::get('carrito/borrar/{producto}',[
		'as'=>'carrito-borrar',
		'uses'=>'CarritoController@delete'
	]);
Route::get('carrito/vaciar',[
		'as'=>'carrito-vaciar',
		'uses'=>'CarritoController@trash'
	]);
Route::get('carrito/actualizar/{producto}/{cantidad?}',[
		'as'=>'carrito-actualizar',
		'uses'=>'CarritoController@update'
	]);
Auth::routes();

Route::get('orden-detalles',[
		'as'=>'orden-detalles',
		'uses'=>'CarritoController@ordenDetalles'
	])->middleware('auth');

//Route::get('/home', 'HomeController@index');

Route::get('payment',array(
		'as'=>'payment',
		'uses'=>'PaypalController@postPayment',
	));
Route::get('payment/status',array(
		'as'=>'payment.status',
		'uses'=>'PaypalController@getPaymentStatus',
	));

//Rutas para la Administración
Route::get('administracion',function(){
	return view('admin.home');
});

Route::resource('categorias', 'Admin\CategoriasController');
Route::resource('productos', 'Admin\ProductosController');