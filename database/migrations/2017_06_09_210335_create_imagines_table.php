<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImaginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagini', function (Blueprint $table) {
            $table->increments('id');
            $table->blob('imagine1');
            $table->blob('imagine2');
            $table->blob('imagine3');
            $table->blob('imagine4');
            $table->blob('imagine5');
            $table->blob('imagine6');
            $table->blob('imagine7');
            $table->blob('imagine8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagini');
    }
}
