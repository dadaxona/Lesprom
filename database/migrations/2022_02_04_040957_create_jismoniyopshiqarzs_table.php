<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJismoniyopshiqarzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jismoniyopshiqarzs', function (Blueprint $table) {
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
        Schema::dropIfExists('jismoniyopshiqarzs');
    }
}
