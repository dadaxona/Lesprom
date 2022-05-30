<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpshisarftavarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opshisarftavars', function (Blueprint $table) {
            $table->bigIncrements('id');               
            $table->bigInteger('tavar_id')->unsigned();
            $table->date('data');
            $table->integer('hajm');
            $table->integer('summa');
            $table->integer('jamisumma');
            $table->timestamps();            
           
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
        Schema::dropIfExists('opshisarftavars');
    }
}
