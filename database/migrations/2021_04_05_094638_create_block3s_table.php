<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlock3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block3s', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 1000);
            $table->string('image', 1000);
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('sn')->default(0);
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
        Schema::dropIfExists('block3s');
    }
}
