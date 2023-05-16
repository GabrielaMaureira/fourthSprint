@extends('layouts.soccerLayout')
@section('title', 'Edit match')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold mb-4">Edit Match</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <form action="{{ route('matches.update', $matches->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="local_team_id">Local Team:</label>
            
            <select class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="local_team_id">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $team->id == $matches->local_team_id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select><br><br>
            
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="visiting_team_id">Visiting Team:</label>
            
            <select class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="visiting_team_id">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $team->id == $matches->visiting_team_id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select><br><br>
            
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="match_date">Match Date:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="datetime-local" name="match_date" value="{{ $matches->match_date }}"><br><br>
            
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="local_goals">Local Goals:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="local_goals" value="{{ $matches->local_goals }}"><br><br>
            
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="visiting_goals">Visiting Goals:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="visiting_goals" value="{{ $matches->visiting_goals }}"><br><br>
            
        </div>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save</button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('matches.index') }}">Back</a>
    </form>
</div>
    @endsection