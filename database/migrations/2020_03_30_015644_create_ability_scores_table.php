<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 100)->nullable()->default('text');
            $table->string('name', 50)->nullable()->default('text');
            $table->string('full_name', 100)->nullable()->default('text');
            $table->string('desc', 500)->nullable()->default('text');
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
        Schema::dropIfExists('ability_scores');
    }
}
