<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matches;


class Team extends Model
{
    use HasFactory;
    // One to many relation

    public function localMatches(){ 
        return $this->hasMany(Matches::class, 'local_team_id'); 
    }

    public function visitingMatches(){
        return $this->hasMany(Matches::class, 'visiting_team_id'); 
    }
}
