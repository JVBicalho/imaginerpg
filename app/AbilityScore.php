<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbilityScore extends Model
{
    protected $fillable =[
       'slug', 
       'name', 
       'full_name', 
       'desc'
    ];
    //
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'ability_scores_skills');
    }
}
