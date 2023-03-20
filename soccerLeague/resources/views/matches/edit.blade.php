
    <h1>Edit Match</h1>
    <form action="{{ route('matches.update', $matches->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="local_team_id">Local Team:</label>
        <select name="local_team_id">
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ $team->id == $matches->local_team_id ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select><br><br>

        <label for="visiting_team_id">Visiting Team:</label>
        <select name="visiting_team_id">
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ $team->id == $matches->visiting_team_id ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select><br><br>

        <label for="match_date">Match Date:</label>
        <input type="datetime-local" name="match_date" value="{{ $matches->match_date }}"><br><br>

        <label for="local_goals">Local Goals:</label>
        <input type="number" name="local_goals" value="{{ $matches->local_goals }}"><br><br>

        <label for="visiting_goals">Visiting Goals:</label>
        <input type="number" name="visiting_goals" value="{{ $matches->visiting_goals }}"><br><br>

        <button type="submit">Save</button>
    </form>
    <a href="{{ route('matches.index') }}">Back</a>
