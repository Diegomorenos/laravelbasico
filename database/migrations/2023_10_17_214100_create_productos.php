<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->unsignedInteger('id_producto',10)->unique();
            $table->string('codigo',50);
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->unsignedInteger('id_marca');
            $table->foreign('id_marca')->references('id_marca')->on('marcas_fabricantes');
            $table->string('descripcion',50);
            $table->enum('unidad_medida',['UNIDAD','OTRO']);
            $table->tinyInteger('disponible');
            $table->float('porcentaje_iva',4,2);
            $table->float('precio_unitario',20,2);
            $table->unsignedSmallInteger('stock');
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
};
