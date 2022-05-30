<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yil_id')->unsigned();
            $table->integer('oy');
            $table->timestamps();         
        
            $table->foreign('yil_id')->references('id')->on('yils')
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
        Schema::dropIfExists('oys');
    }
}
