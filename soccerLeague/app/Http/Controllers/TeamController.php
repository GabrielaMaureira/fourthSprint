<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
 

class TeamController extends Controller
{
    public function index(){

        $teams = Team::all();
        return view('welcome', ['teams' => $teams]);
        // return view('teams.index', ['teams' => $teams]); 
    }

}
