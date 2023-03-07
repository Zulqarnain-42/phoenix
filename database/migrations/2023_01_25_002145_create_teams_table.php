<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('designation')->nullable();
            $table->string('userimage')->nullable();
            $table->longText('details')->nullable();
            $table->string('twitterlink')->nullable();
            $table->string('facebooklink')->nullable();
            $table->string('linkedinlink')->nullable();
            $table->string('instagramlink')->nullable();
            $table->foreignId('userid')->unsigned()->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
