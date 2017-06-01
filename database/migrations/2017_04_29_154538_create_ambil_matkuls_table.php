<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbilMatkulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ambil_matkuls');
        Schema::create('ambil_matkuls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nrp_pengambil', 15);
            $table->string('tempat_kelas', 4);
            $table->integer('uts');
            $table->integer('uas');
            $table->timestamps();
            $table->foreign('tempat_kelas')
                  ->references('kode_kelas')->on('kelas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('nrp_pengambil')
                  ->references('nrp')->on('mhs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });

        // Schema::create('ambil_matkuls', function($table){
        //   $table->foreign('nrp_pengambil')
        //         ->references('nrp')
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
        Schema::dropIfExists('ambil_matkuls');
    }
}
