<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

//            id,breed,section,provisional,country,url,image,pdf
            $table->bigIncrements('id');
            $table->string('breed');
            $table->string('section')->nullable();
            $table->string('provisional')->nullable();
            $table->string('country')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
