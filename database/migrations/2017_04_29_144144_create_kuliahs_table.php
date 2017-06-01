<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kuliahs');
        Schema::create('kuliahs', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('kodekuliah', 4);
            $table->primary('kodekuliah');
            $table->string('matakuliah', 20);
            $table->integer('sks')->unsigned();
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
        Schema::dropIfExists('kuliahs');
    }
}
