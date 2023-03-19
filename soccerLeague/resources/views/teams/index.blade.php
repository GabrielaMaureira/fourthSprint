<h1>Listado de Equipos</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->description }}</td>
                <td>
                    @if($team->image)
                        <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                    @endif
                </td>
                <td>
                    <a href="{{ route('teams.show', $team->id) }}">Ver</a>
                    <a href="{{ route('teams.edit', $team->id) }}">Editar</a>
                    <form method="POST" action="{{ route('teams.destroy', $team->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('teams.create') }}">Crear Equipo</a>
