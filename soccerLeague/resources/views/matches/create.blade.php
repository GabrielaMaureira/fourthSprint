
	<h1>Create New Match</h1>
	<form action="{{ route('matches.store') }}" method="POST">
		@csrf
		<label for="local_team_id">Local Team:</label>
		<select name="local_team_id" id="local_team_id">
			@foreach($teams as $team)
			<option value="{{ $team->id }}">{{ $team->name }}</option>
			@endforeach
		</select><br><br>

		<label for="visiting_team_id">Visiting Team:</label>
		<select name="visiting_team_id" id="visiting_team_id">
			@foreach($teams as $team)
			<option value="{{ $team->id }}">{{ $team->name }}</option>
			@endforeach
		</select><br><br>

		<label for="match_date">Match Date:</label>
		<input type="datetime-local" id="match_date" name="match_date"><br><br>

		<label for="local_goals">Local Goals:</label>
		<input type="number" id="local_goals" name="local_goals"><br><br>

		<label for="visiting_goals">Visiting Goals:</label>
		<input type="number" id="visiting_goals" name="visiting_goals"><br><br>

		<button type="submit">Create</button>
	</form>

    <a href="{{ route('matches.index') }}">Back</a>

