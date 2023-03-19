<h1>Crear Equipo</h1>

<form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="description">Descripción:</label>
    <textarea id="description" name="description" required></textarea>
    <br>
    <label for="image">Imagen:</label>
    <input type="file" id="image" name="image">
    <br>
    <button type="submit">Crear</button>
</form>

<a href="{{ route('teams.index') }}">Volver</a>

