<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('thumb', 512);
            $table->string('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->json('artists')->nullable();
            $table->json('writers')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
