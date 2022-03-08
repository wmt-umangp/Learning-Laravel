<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Music extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Artist', function (Blueprint $table) {
            $table->increments('artist_id');
            $table->string('artist_name');
            $table->string('artist_email')->unique();
            $table->string('artist_pass');
            $table->string('artist_uname')->unique();
            $table->timestamps();
        });

        Schema::create('Album', function (Blueprint $table) {
            $table->increments('album_id');
            $table->integer('artist_id_fk')->unsigned();
            $table->foreign('artist_id_fk')->references('artist_id')->on('Artist');
            $table->string('album_title');
            $table->year('album_year');
            $table->binary('album_cover_image');
            $table->date('album_published_date');
            $table->timestamps();
        });

        Schema::create('Track', function (Blueprint $table) {
            $table->increments('track_id');
            $table->integer('album_id_fk')->unsigned();
            $table->foreign('album_id_fk')->references('album_id')->on('Album');
            $table->string('track_title');
            $table->binary('track_file');
            $table->enum('track_type',['POP','Classic','Jazz','Rock','Disco']);
            $table->time('track_time');
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
        //
    }
}
