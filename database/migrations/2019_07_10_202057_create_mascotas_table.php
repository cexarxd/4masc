<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mascotas_id')->unique();
            $table->string('nombre');
        /*relacion con tabla colores*/
            $table->unsignedBigInteger('color_id');
$table->foreign('color_id', 'fk_mascotas_colores')->references('id')->on('colores')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla especies*/ 
            $table->unsignedBigInteger('especie_id');
$table->foreign('especie_id', 'fk_mascotas_especies')->references('id')->on('especies')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla razas*/
            $table->unsignedBigInteger('raza_id');
$table->foreign('raza_id', 'fk_mascotas_razas')->references('id')->on('razas')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla sexos*/
            $table->unsignedBigInteger('sexo_id');
$table->foreign('sexo_id', 'fk_mascotas_sexos')->references('id')->on('sexos')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla antirrabicas*/
            $table->unsignedBigInteger('antirrabica_id');
$table->foreign('antirrabica_id', 'fk_mascotas_antirrabicas')->references('id')->on('antirrabicas')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla temperamentos*/
            $table->unsignedBigInteger('temperamento_id');
$table->foreign('temperamento_id', 'fk_mascotas_temperamentos')->references('id')->on('temperamentos')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla esteriles*/
            $table->unsignedBigInteger('esteril_id');
$table->foreign('esteril_id', 'fk_mascotas_esteriles')->references('id')->on('esteriles')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla adopcion*/
$table->unsignedBigInteger('adopcion_id');
$table->foreign('adopcion_id', 'fk_mascotas_adopcion')->references('id')->on('adopciones')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla estados*/  
            $table->unsignedBigInteger('estado_id');
$table->foreign('estado_id', 'fk_mascotas_estados')->references('id')->on('estados')->onDelete('cascade')->onUpdate('cascade');
        /*relacion con tabla usuarios*/
        $table->unsignedBigInteger('users_cc');
        $table->foreign('users_cc', 'fk_mascotas_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mascotas');
    }
}
