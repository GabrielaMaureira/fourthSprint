@extends('layouts.soccerLayout')
@section('title', 'Create match')
@section('content')

<div class="flex justify-between items-center mb-4">
	<h1 class="text-2xl font-bold mb-4">Create New Match</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
		<form action="{{ route('matches.store') }}" method="POST" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
			@csrf
			<div class="mb-4">
				<label class="block text-gray-700 font-bold mb-2"  for="local_team_id">Local Team:</label>
				<select class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="local_team_id" id="local_team_id">
					@foreach($teams as $team)
					<option value="{{ $team->id }}">{{ $team->name }}</option>
					@endforeach
				</select><br>
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-bold mb-2"  for="visiting_team_id">Visiting Team:</label>
				<select class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" name="visiting_team_id" id="visiting_team_id">
					@foreach($teams as $team)
					<option value="{{ $team->id }}">{{ $team->name }}</option>
					@endforeach
				</select><br>
			</div>
			
			<div class="mb-4">
				<label class="block text-gray-700 font-bold mb-2"  for="match_date">Match Date:</label>
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="datetime-local" id="match_date" name="match_date"><br>
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-bold mb-2"  for="local_goals">Local Goals:</label>
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="local_goals" name="local_goals"><br>
			</div>

			<div class="mb-4">
				<label class="block text-gray-700 font-bold mb-2"  for="visiting_goals">Visiting Goals:</label>
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="visiting_goals" name="visiting_goals"><br>
			</div>

			<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create</button>
			<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('matches.index') }}">Back</a>
		</form>
</div>
@endsection   

