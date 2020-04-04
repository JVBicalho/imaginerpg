<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    public function abilityScore()
    {
        return $this->belongsToMany('App\AbilityScore', 'ability_score_skill');
    }
}
