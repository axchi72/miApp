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
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('permiso_id');

            $table->foreign('rol_id', 'fk_permisorols_rol')->references('id')->on('rols')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('permiso_id', 'fk_permisorols_permiso')->references('id')->on('permisos')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
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
