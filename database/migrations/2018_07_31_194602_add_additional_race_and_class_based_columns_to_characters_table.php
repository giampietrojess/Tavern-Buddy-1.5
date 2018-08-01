<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalRaceAndClassBasedColumnsToCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('hit_dice');
            $table->integer('hit_points');
            $table->integer('proficiency_bonus');
            $table->integer('speed')->after('class');
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
            $table->dropColumn('hit_dice');
            $table->dropColumn('hit_points');
            $table->dropColumn('proficiency_bonus');
            $table->dropColumn('speed');
        });
    }
}
