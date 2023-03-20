<h1>Teams</h1>
<a href="{{ route('teams.create') }}">NEW TEAM</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->description }}</td>
                <td>
                    @if($team->image)
                        <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                    @endif
                </td>
                <td>
                    <a href="{{ route('teams.show', $team->id) }}">Show</a>
                    <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
                    <form  action="{{ route('teams.destroy', $team->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

