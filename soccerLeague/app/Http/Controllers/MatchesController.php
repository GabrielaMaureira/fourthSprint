<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveMatchesRequest;
use App\Models\Team;
use App\Models\Matches;


class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Matches::simplePaginate(10);
        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $match = new Matches();
        $teams = Team::all();
        return view('matches.create', compact('match', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveMatchesRequest $request)
    {
        Matches::create($request->validated());
        return redirect()->route('matches.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matches = Matches::find($id);
        return view('matches.show', compact('matches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matches = Matches::find($id); 
        $teams = Team::all(); 
        return view('matches.edit', compact('matches', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveMatchesRequest $request, $id)
    {
        $matches = Matches::find($id)->update($request->validated());
        return redirect()->route('matches.index', $id);
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matches::find($id)->delete();
        return redirect()->route('matches.index'); 
    }
}
