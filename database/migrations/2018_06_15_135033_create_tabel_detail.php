<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('detail_pemesanans', function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_pemesanan', false, true)->length(5);
            $table->integer('id_kue',false, true)->length(5);
            $table->integer('qty', false, true)->length(11);
            $table->double('harga');
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
