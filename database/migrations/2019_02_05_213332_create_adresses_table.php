<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user', false, true);
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('type_address',2);
            $table->string('cep',9);
            $table->string('logradouro',40);
            $table->integer('numero', false, true)->length(10);
            $table->string('compl',30)->nullable();
            $table->string('bairro',30);
            $table->string('cidade',30);
            $table->string('estado',2);
            $table->string('lat',40)->nullable();
            $table->string('lng',40)->nullable();
            $table->Integer('ibge',false,true);
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
        Schema::dropIfExists('adresses');
    }
}
