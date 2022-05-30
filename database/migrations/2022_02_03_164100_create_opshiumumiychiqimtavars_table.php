<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpshiumumiychiqimtavarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opshiumumiychiqimtavars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tavarturi_id')->unsigned();       
            $table->integer('hajm');
            $table->integer('summa');
            $table->integer('umumiy');
            $table->timestamps(); 
     
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
        Schema::dropIfExists('opshiumumiychiqimtavars');
    }
}
