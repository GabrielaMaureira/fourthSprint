<h1>Edit Team</h1>
	<form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" value="{{ $team->name }}"><br>

		<label for="description">Description:</label>
		<textarea id="description" name="description">{{ $team->description }}</textarea><br>

		<label for="image">Image:</label>
		<input type="file" id="image" name="image"><br>

		<button type="submit">Update</button>
	</form>
	<a href="{{ route('teams.index') }}">Back</a>