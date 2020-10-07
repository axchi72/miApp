<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('extracto');
            $table->text('contenido');
            $table->string('foto');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('usuario_id', 'fk_usuariopost_usuario')->references('id')->on('usuarios')
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
        Schema::dropIfExists('posts');
    }
}
