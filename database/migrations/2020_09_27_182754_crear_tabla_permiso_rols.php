<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoRols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('permiso_id');
            $table->unsignedBigInteger('creo');
            $table->unsignedBigInteger('actualizo');
            $table->timestamps();

            $table->foreign('rol_id', 'fk_permisorols_rol')->references('id')->on('rols')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('permiso_id', 'fk_permisorols_permiso')->references('id')->on('permisos')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_rols');
    }
}
