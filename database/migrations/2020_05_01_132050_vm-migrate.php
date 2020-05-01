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
            $table->string('tittle', 500);
            $table->string('description', 5000);
            $table->integer('content', 10000);
            $table->integer('category_id');
            $table->integer('trend');
            $table->string('image', 250);
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('slug', 250);
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('image', 250);
            $table->string('type', 250);
            $table->integer('position');
            $table->string('url', 250);
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
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
