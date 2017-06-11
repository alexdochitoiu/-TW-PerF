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
            $table->string('imagine1')->default('path');
            $table->string('imagine2')->default('path');;
            $table->string('imagine3')->default('path');;
            $table->string('imagine4')->default('path');;
            $table->string('imagine5')->default('path');;
            $table->string('imagine6')->default('path');;
            $table->string('imagine7')->default('path');;
            $table->string('imagine8')->default('path');;
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
