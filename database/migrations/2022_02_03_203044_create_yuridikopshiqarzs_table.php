<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYuridikopshiqarzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yuridikopshiqarzs', function (Blueprint $table) {
            $table->bigIncrements('id');                            
            $table->integer('jamisumma');
            $table->integer('karzsumma');
            $table->integer('umumiy');
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
        Schema::dropIfExists('yuridikopshiqarzs');
    }
}
