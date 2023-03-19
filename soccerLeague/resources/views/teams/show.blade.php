<h1>Detalle del equipo</h1>

<p>ID: {{ $team->id }}</p>
<p>Nombre: {{ $team->name }}</p>
<p>Descripción: {{ $team->description }}</p>

@if($team->image)
    <p>Imagen:</p>
    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
@endif

<a href="{{ route('teams.edit', $team->id) }}">Editar</a>

<form method="POST" action="{{ route('teams.destroy', $team->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('teams.index') }}">Volver</a>

