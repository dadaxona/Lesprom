<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiqimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiqims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yil_id')->unsigned();
            $table->bigInteger('oy_id')->unsigned();
            $table->bigInteger('kun_id')->unsigned();
            $table->bigInteger('jismoniyclenci_id')->unsigned();
            $table->bigInteger('tavar_id')->unsigned();
            $table->date('data');
            $table->integer('kub');
            $table->integer('summa')->nullable();
            $table->string('naqt')->nullable();
            $table->integer('summa2')->nullable();
            $table->string('kartq')->nullable();
            $table->integer('summa3')->nullable();
            $table->string('bank')->nullable();
            $table->integer('karzsumma')->nullable();
            $table->date('sroc')->nullable();
            $table->timestamps();

            $table->foreign('yil_id')->references('id')->on('yils')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('oy_id')->references('id')->on('oys')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kun_id')->references('id')->on('kuns')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jismoniyclenci_id')->references('id')->on('jismoniyclencis')
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
        Schema::dropIfExists('chiqims');
    }
}
