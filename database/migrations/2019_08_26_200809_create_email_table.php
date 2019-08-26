<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration
{

    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tentativas');
            $table->integer('classe_email');
            $table->integer('log');
            $table->morphs('emails');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
