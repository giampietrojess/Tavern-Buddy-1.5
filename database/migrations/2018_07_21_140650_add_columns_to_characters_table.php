<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->string('character_name', 100);
            $table->string('race');
            $table->string('class');
            $table->integer('str_score');
            $table->integer('dex_score');
            $table->integer('con_score');
            $table->integer('int_score');
            $table->integer('wis_score');
            $table->integer('cha_score');
            $table->string('background');
            $table->string('alignment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
