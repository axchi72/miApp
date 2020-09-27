<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioRols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('usuario_id');
            $table->boolean('estado');
            $table->unsignedBigInteger('creo');
            $table->unsignedBigInteger('actualizo');
            $table->timestamps();

            $table->foreign('rol_id', 'fk_usuariorols_rol')->references('id')->on('rols')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('usuario_id', 'fk_usuariorols_usuario')->references('id')->on('usuarios')
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
        Schema::dropIfExists('usuario_rols');
    }
}
