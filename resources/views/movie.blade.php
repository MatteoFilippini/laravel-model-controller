<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <h1>{{ $movies->title }}</h1>
    <p><span>Nationality:</span> {{ $movies->nationality }}</p>
    <p><span>Date:</span> {{ $movies->date }}</p>
    <p><span>Vote:</span> {{ $movies->vote }}</p>
    <a href="{{ route('home') }}">BACK</a>
</body>

</html>