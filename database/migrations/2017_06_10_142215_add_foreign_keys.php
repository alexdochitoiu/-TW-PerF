<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anunturi', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('mesaje', function(Blueprint $table) {
            $table->foreign('id_sender')->references('id')->on('users');
            $table->foreign('id_receiver')->references('id')->on('users');
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
