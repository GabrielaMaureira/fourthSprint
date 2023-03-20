
	<h1>Matches</h1>
	<a href="{{ route('matches.create') }}">NEW MATCH</a>
	<table>
		<thead>
			<tr>
				<th>Locals</th>
				<th>Visitors</th>
				<th>Match Date</th>
				<th>Local Goals</th>
				<th>Visiting Goals</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($matches as $match)
			<tr>
				<td>{{ $match->localTeam->name }}</td>
				<td>{{ $match->visitingTeam->name }}</td>
				<td>{{ $match->match_date }}</td>
				<td>{{ $match->local_goals }}</td>
				<td>{{ $match->visiting_goals }}</td>
				<td>
					<a href="{{ route('matches.show', $match->id) }}">Show</a>
					<a href="{{ route('matches.edit', $match->id) }}">Edit</a>
					<form action="{{ route('matches.destroy', $match->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
