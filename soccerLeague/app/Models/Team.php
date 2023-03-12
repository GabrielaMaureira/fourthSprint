<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matches;


class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image']; // An attribute required to know what is to be filled

    public function Localmatches(){
        return $this->hasMany(Matches::class, 'local_team_id'); // A team can play many games
    }

    public function Visitingmatches(){
        return $this->hasMany(Matches::class, 'visiting_team_id'); 
    }
}
