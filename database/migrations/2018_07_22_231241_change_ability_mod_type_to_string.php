<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAbilityModTypeToString extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->string('str_mod')->change();
            $table->string('dex_mod')->change();
            $table->string('con_mod')->change();
            $table->string('int_mod')->change();
            $table->string('wis_mod')->change();
            $table->string('cha_mod')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('str_mod')->change();
            $table->integer('dex_mod')->change();
            $table->integer('con_mod')->change();
            $table->integer('int_mod')->change();
            $table->integer('wis_mod')->change();
            $table->integer('cha_mod')->change();
        });
    }
}
