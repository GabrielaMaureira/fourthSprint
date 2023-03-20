
    <h1>Show Match</h1>
    <p><strong>ID:</strong> {{ $matches->id }}</p>
    <p><strong>Local Team:</strong> {{ $matches->localTeam->name }}</p>
    <p><strong>Visiting Team:</strong> {{ $matches->visitingTeam->name }}</p>
    <p><strong>Match Date:</strong> {{ $matches->match_date }}</p>
    <p><strong>Local Goals:</strong> {{ $matches->local_goals }}</p>
    <p><strong>Visiting Goals:</strong> {{ $matches->visiting_goals }}</p>
    <a href="{{ route('matches.edit', 'matches->id') }}">Edit</a>
    <form method="POST" action="{{ route('matches.destroy', $matches->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
    <a href="{{ route('matches.index') }}">Back</a>

