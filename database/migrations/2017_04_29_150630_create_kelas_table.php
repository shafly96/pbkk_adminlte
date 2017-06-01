<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kelas');
        Schema::create('kelas', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('kode_kelas', 4);
            $table->primary('kode_kelas');
            $table->string('kuliah_pemakai', 4);
            $table->string('nip_pengajar', 15);
            $table->timestamps();
            $table->foreign('kuliah_pemakai')
                  ->references('kodekuliah')->on('kuliahs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('nip_pengajar')
                  ->references('nip')->on('dosens')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });

        // Schema::create('kelas', function($table){
        //   $table->foreign('kuliah_pemakai')
        //         ->references('kodekuliah')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        //   $table->foreign('nip_pengajar')
        //         ->references('nip')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
