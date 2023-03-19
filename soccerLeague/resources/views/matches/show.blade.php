<!DOCTYPE html>
<html>
<head>
    <title>Show Match</title>
</head>
<body>
    <h1>Show Match</h1>
    <p><strong>ID:</strong> {{ $matches->id }}</p>
    <p><strong>Local Team:</strong> {{ $matches->localTeam->name }}</p>
    <p><strong>Visiting Team:</strong> {{ $matches->visitingTeam->name }}</p>
    <p><strong>Match Date:</strong> {{ $matches->match_date }}</p>
    <p><strong>Local Goals:</strong> {{ $matches->local_goals }}</p>
    <p><strong>Visiting Goals:</strong> {{ $matches->visiting_goals }}</p>
    <a href="{{ route('matches.index') }}">Back to Matches</a>
</body>
</html>
