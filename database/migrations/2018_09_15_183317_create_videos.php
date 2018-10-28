<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('file_location');
            $table->string('subtitles_location')->nullable();
            $table->string('thumbnail_locattion')->nullable();
            $table->boolean('parental_control')->default(false);
            $table->boolean('private')->default(false);
            $table->unsignedDecimal('year', 4, 0)->nullable();
            $table->uuid('user_uuid');
            $table->timestamps();
            $table->foreign('user_uuid')->references('uuid')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
