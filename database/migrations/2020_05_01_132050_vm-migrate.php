<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VmMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('tittle');
            $table->text('description');
            $table->text('content', 10000);
            $table->integer('category_id');
            $table->integer('trend');
            $table->string('image', 250);
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('slug', 250);
            $table->timestamps();
        });
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('image', 250);
            $table->string('type', 250);
            $table->integer('position');
            $table->string('url', 250);
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
        Schema::dropIfExists('posts');
        Schema::dropIfExists('ads');
        Schema::dropIfExists('categories');
    }
}
