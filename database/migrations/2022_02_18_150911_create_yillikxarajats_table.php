<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYillikxarajatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yillikxarajats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yil_id')->unsigned();
            $table->integer('elektor')->nullable();
            $table->integer('gaz')->nullable();
            $table->integer('suv')->nullable();
            $table->integer('pitaniya')->nullable();
            $table->integer('avto')->nullable();
            $table->integer('bux')->nullable();
            $table->integer('korinmi')->nullable();
            $table->integer('tutilmagan')->nullable();
            $table->date('data')->nullable();
            $table->integer('jamisumma')->nullable();
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
        Schema::dropIfExists('yillikxarajats');
    }
}
