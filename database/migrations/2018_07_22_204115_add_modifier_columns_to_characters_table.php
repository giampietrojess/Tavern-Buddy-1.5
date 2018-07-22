<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifierColumnsToCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('str_mod')->after('str_score');
            $table->integer('dex_mod')->after('dex_score');
            $table->integer('con_mod')->after('con_score');
            $table->integer('int_mod')->after('int_score');
            $table->integer('wis_mod')->after('wis_score');
            $table->integer('cha_mod')->after('cha_score');
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
            $table->dropColumn('str_mod');
            $table->dropColumn('dex_mod');
            $table->dropColumn('con_mod');
            $table->dropColumn('int_mod');
            $table->dropColumn('wis_mod');
            $table->dropColumn('cha_mod');
        });
    }
}
