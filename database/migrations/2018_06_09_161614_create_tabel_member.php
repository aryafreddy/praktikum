<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('members', function (Blueprint $table){
            $table->increments('id_member');
            $table->string('nama_member', 30);
            $table->string('alamat', 30);
            $table->string('email', 30);
            $table->string('no_hp', 15);
            $table->string('username_member', 30);
            $table->string('pass_member', 30);
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
