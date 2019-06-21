<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->string('nombre');
            $table->string('codigo');
            $table->text('descripcion');
            $table->text('imagen');
            $table->decimal('precio',5,2);
            $table->integer('idestado');
            $table->integer('idcategoria')->unsigned();
            $table->foreign('idcategoria')
                  ->references('idcategoria')->on('categorias')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
