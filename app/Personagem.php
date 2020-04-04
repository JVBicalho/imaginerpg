<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    //
    protected $table='personagem';
    protected $fillable=[
            'name',
            'class',
            'level',
            'experience_points',
            'background',
            'race',
            'alignment',
            'other_proficiencies_and_languages',
            'equipment',
            'atacks_and_spellcasting',
            'personality_traits',
            'ideals',
            'bonds',
            'flaws',
            'features_and_traits',

            'age',
            'height',
            'weight',
            'eyes',
            'skin',
            'hair',
            'allies_and_organizations',
            'character_appearance',
            'character_backstory',
            'additional_features_and_traits',
            'teasure',
            //Death Save
            'death_save_1',
            'death_save_2',
            'death_save_3',
            //end Death Save
            //Ability Scores
            'strength',
            'dexterity',
            'constitution',
            'intelligence',
            'wisdom',
            'charisma',
            //end Ability Scores
            'passive_wisdom',
            'inspiration',
            'proeficiency_bonus',
            //Saving Throws
            'strength_saving',
            'dexterity_saving',
            'constitution_saving',
            'intelligence_saving',
            'wisdom_saving',
            'charisma_saving',
            
            //end Saving Throws
            // Skills
            'acrobatics',
            'animal_handling',
            'arcana',
            'athletics',
            'deception',
            'history',
            'insight',
            'intimidation',
            'investigation',
            'medicine',
            'nature',
            'perception',
            'performance',
            'persuasion',
            'religion',
            'sleigth_of_hand',
            'stealth',
            'survival',
            // end Skills
            'armor_class',
            'initiative',
            'speed',
            //Hit
            'hit_dice',
            'hit_point_maximum',
            'hit_point_current',
            'hit_point_temporary',
            //end Hit
    ];

}
