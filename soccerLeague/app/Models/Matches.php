<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;


class Matches extends Model
{
    use HasFactory;
    
    protected $fillable = ['local_team_id', 'visiting_team_id', 'match_date', 'local_goals', 'visiting_goals'];


    public function localTeam(){
        return $this->belongsTo(Team::class, 'local_team_id'); // 'belongsTo' to FK
    }

    public function visitingTeam(){
        return $this->belongsTo(Team::class, 'visiting_team_id');
    }
    
}
