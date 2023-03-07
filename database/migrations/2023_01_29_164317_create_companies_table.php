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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('timing')->nullable();
            $table->string('instagramlink')->nullable();
            $table->string('twitterlink')->nullable();
            $table->string('facebooklink')->nullable();
            $table->string('linkedinlink')->nullable();
            $table->string('ourvision')->nullable();
            $table->string('address')->nullable();
            $table->string('ourapproach')->nullable();
            $table->string('ourgoals')->nullable();
            $table->string('companyinfo')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
