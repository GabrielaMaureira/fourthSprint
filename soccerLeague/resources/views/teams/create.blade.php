<h1>Create New Team</h1>

<form  action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <br>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image">
    <br>
    <button type="submit">Create</button>
</form>

<a href="{{ route('teams.index') }}">Back</a>

