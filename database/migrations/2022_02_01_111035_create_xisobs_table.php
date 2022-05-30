<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXisobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xisobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yil_id')->unsigned();
            $table->bigInteger('oy_id')->unsigned();
            $table->bigInteger('kun_id')->unsigned();
            $table->bigInteger('tavarturi_id')->unsigned();
            $table->date('data');
            $table->string('qayerdan');
            $table->integer('kub');
            $table->integer('summa');
            $table->string('naqt')->nullable();
            $table->string('kartq')->nullable();
            $table->string('bank')->nullable();
            $table->timestamps();

            $table->foreign('yil_id')->references('id')->on('yils')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('oy_id')->references('id')->on('oys')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kun_id')->references('id')->on('kuns')
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
        Schema::dropIfExists('xisobs');
    }
}
