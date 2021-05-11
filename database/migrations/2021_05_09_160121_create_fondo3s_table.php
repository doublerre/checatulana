<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFondo3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fondo3s', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('m_user_id');
            $table->string('file', 128)->default('EN ESPERA...');
            $table->string('file_user', 128);
            $table->enum('status', ['APROBADO', 'RECHAZADO', 'EN REVISION', 'PENDIENTE'])->default('PENDIENTE');
            $table->string('anio', 4);
            $table->string('month', 11);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fondo3s');
    }
}
