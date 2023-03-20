<h1>Detalle del equipo</h1>

<p>ID: {{ $team->id }}</p>
<p>Name: {{ $team->name }}</p>
<p>Description: {{ $team->description }}</p>

@if($team->image)
    <p>Image:</p>
    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
@endif

<a href="{{ route('teams.edit', $team->id) }}">Edit</a>

<form method="POST" action="{{ route('teams.destroy', $team->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<a href="{{ route('teams.index') }}">Back</a>

