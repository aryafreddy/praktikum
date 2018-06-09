<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('pemesanans', function (Blueprint $table){
            $table->increments('id_pemesanan');
            $table->date('tgl_order');
            $table->double('total_beli');
            $table->double('total_bayar');
            $table->date('tgl_kirim');
            $table->integer('id_member');
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
        //
    }
}
