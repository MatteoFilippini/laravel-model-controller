<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h2>Home - MOVIES</h2>
    @forelse($movies as $movie)
    <ul>
        <li><a href="{{ route('movie',['id'=>$movie->id]) }}" style="text-decoration: none;color:black">{{ $movie->title }}</a></li>
    </ul>
    @empty
    <p>Non ci sono film!</p>
    @endforelse
</body>

</html>