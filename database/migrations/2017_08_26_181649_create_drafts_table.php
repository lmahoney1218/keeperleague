<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drafts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sport');
            $table->integer('rounds');
            $table->integer('teams');
            $table->integer('league_id')->unsigned()->index();
            $table->integer('turn')->default(0);
            $table->json('order')->nullable;
            $table->integer('creator_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *h
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drafts');
    }
}
