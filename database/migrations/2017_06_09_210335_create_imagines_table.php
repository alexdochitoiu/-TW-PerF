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
            $table->string('imagine1');
            $table->string('imagine2');
            $table->string('imagine3');
            $table->string('imagine4');
            $table->string('imagine5');
            $table->string('imagine6');
            $table->string('imagine7');
            $table->string('imagine8');
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
