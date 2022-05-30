<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOylikmasalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oylikmasalas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yil_id')->unsigned();
            $table->bigInteger('oy_id')->unsigned();          
            $table->bigInteger('ishchi_id')->unsigned();
            $table->bigInteger('tavarturi_id')->unsigned();                 
            $table->integer('yuk')->nullable();
            $table->integer('summa')->nullable();
            $table->integer('jamisumma')->nullable();
            $table->timestamps();
            
            $table->foreign('yil_id')->references('id')->on('yils')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('oy_id')->references('id')->on('oys')
            ->onDelete('cascade')->onUpdate('cascade');          
            $table->foreign('ishchi_id')->references('id')->on('ishchis')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tavarturi_id')->references('id')->on('tavarturis')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oylikmasalas');
    }
}
