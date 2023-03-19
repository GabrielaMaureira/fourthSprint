<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\SaveTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams')); // Compact() = assoc array. 'teams' = key.

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team();
        return view('teams.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveTeamRequest $request)
    {
        $data = $request->validated(); // data from user validated.

        if($request->hasFile('image')){ // if this data has an image...
            $data['image'] = str_replace('public/', '', $request->file('image')->store('public/images'));
        }
        
        $team = Team::create($data);
        return redirect()->route('teams.index', $team->id);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveTeamRequest $request, $id)
    {
        Team::find($id)->update($request->validated());
        if($request->hasFile('image')){ // if this data has an image...
            $data['image'] = str_replace('public/', '', $request->file('image')->store('public/images'));
        }
        return redirect()->route('teams.index', $id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::find($id)->delete();
        return redirect()->route('teams.index');
    }
}
