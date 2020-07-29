<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');

            $table->string('wilaya');
            $table->string('commune');
            $table->string('typel');
            $table->integer('surface');
            $table->integer('pieces');
            $table->text('desc');
            $table->string('vl');
            $table->integer('price');
            $table->integer('nbrgarage');
            $table->integer('nbrshower');
            
            $table->integer('etage');
            $table->boolean('gardin')->default(0);
            $table->boolean('pool')->default(0);
            $table->boolean('furniture')->default(0);
            $table->boolean('paper')->default(0);

            $table->softDeletes();
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
        Schema::dropIfExists('locales');
    }
}
