<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityScoreSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_score_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ability_score_id')->unsigned();
            // $table->foreign('ability_score_id')->references('id')->on('ability_scores')->onDelete('cascade');
            $table->integer('skills_id')->unsigned();
            // $table->foreign('skills_id')->references('id')->on('skills')->onDelete('cascade');
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
        Schema::dropIfExists('ability_score_skills');
    }
}
