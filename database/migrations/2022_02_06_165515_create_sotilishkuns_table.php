<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSotilishkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sotilishkuns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yil_id')->unsigned();
            $table->bigInteger('oy_id')->unsigned();
            $table->bigInteger('kun_id')->unsigned(); 
            $table->bigInteger('tavar_id')->unsigned();       
            $table->integer('hajm');
            $table->integer('summa');
            $table->timestamps();
            
            $table->foreign('yil_id')->references('id')->on('yils')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('oy_id')->references('id')->on('oys')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kun_id')->references('id')->on('kuns')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tavar_id')->references('id')->on('tavars')
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
        Schema::dropIfExists('sotilishkuns');
    }
}
