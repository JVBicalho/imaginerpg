<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePersonagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('class',50);
            $table->integer('level');
            $table->integer('experience_points');
            $table->string('background',100);
            $table->string('race',50);
            $table->string('alignment',50);
            $table->string('other_proficiencies_and_languages',350);
            $table->string('equipment',350);
            $table->string('atacks_and_spellcasting',350);
            $table->string('personality_traits',350);
            $table->string('ideals',350);
            $table->string('bonds',350);
            $table->string('flaws',350);
            $table->string('features_and_traits',350);

            $table->integer('age')->unsigned()->nullable();
            $table->integer('height')->unsigned()->nullable();
            $table->integer('weight')->unsigned()->nullable();
            $table->string('eyes', 50)->nullable()->default('text');
            $table->string('skin', 50)->nullable()->default('text');
            $table->string('hair', 50)->nullable()->default('text');
            $table->string('allies_and_organizations', 100)->nullable()->default('text');
            $table->string('character_appearance', 100)->nullable()->default('text');
            $table->string('character_backstory', 100)->nullable()->default('text');
            $table->string('additional_features_and_traits', 100)->nullable()->default('text');
            $table->string('teasure', 100)->nullable()->default('text');
            //Death Save
            $table->boolean('death_save_1')->nullable();
            $table->boolean('death_save_2')->nullable();
            $table->boolean('death_save_3')->nullable();
            //end Death Save
            //Ability Scores
            $table->smallInteger('strength')->nullable();
            $table->smallInteger('dexterity')->nullable();
            $table->smallInteger('constitution')->nullable();
            $table->smallInteger('intelligence')->nullable();
            $table->smallInteger('wisdom')->nullable();
            $table->smallInteger('charisma')->nullable();
            //end Ability Scores
            $table->smallInteger('passive_wisdom')->nullable();
            $table->smallInteger('inspiration')->nullable();
            $table->smallInteger('proeficiency_bonus')->nullable();
            //Saving Throws
            $table->smallInteger('strength_saving')->nullable();
            $table->smallInteger('dexterity_saving')->nullable();
            $table->smallInteger('constitution_saving')->nullable();
            $table->smallInteger('intelligence_saving')->nullable();
            $table->smallInteger('wisdom_saving')->nullable();
            $table->smallInteger('charisma_saving')->nullable();
            
            //end Saving Throws
            // Skills
            $table->smallInteger('acrobatics')->nullable();
            $table->smallInteger('animal_handling')->nullable();
            $table->smallInteger('arcana')->nullable();
            $table->smallInteger('athletics')->nullable();
            $table->smallInteger('deception')->nullable();
            $table->smallInteger('history')->nullable();
            $table->smallInteger('insight')->nullable();
            $table->smallInteger('intimidation')->nullable();
            $table->smallInteger('investigation')->nullable();
            $table->smallInteger('medicine')->nullable();
            $table->smallInteger('nature')->nullable();
            $table->smallInteger('perception')->nullable();
            $table->smallInteger('performance')->nullable();
            $table->smallInteger('persuasion')->nullable();
            $table->smallInteger('religion')->nullable();
            $table->smallInteger('sleigth_of_hand')->nullable();
            $table->smallInteger('stealth')->nullable();
            $table->smallInteger('survival')->nullable();
            // end Skills
            $table->smallInteger('armor_class')->nullable();
            $table->smallInteger('initiative')->nullable();
            $table->smallInteger('speed')->nullable();
            //Hit
            $table->string('hit_dice',5)->nullable();
            $table->smallInteger('hit_point_maximum')->nullable();
            $table->smallInteger('hit_point_current')->nullable();
            $table->smallInteger('hit_point_temporary')->nullable();
            //end Hit
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
        Schema::dropIfExists('personagem');
    }
}
