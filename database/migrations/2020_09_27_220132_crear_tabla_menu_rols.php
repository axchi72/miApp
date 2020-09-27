<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMenuRols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_rols', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('menu_id');

            $table->foreign('rol_id', 'fk_menurols_rol')->references('id')->on('rols')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('menu_id', 'fk_menurols_menu')->references('id')->on('menus')
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
        Schema::dropIfExists('menu_rols');
    }
}
