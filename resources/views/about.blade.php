<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Jett Blog | About</title>
</head>
<body>
    <h3>Halaman About</h3>
    <h5>{{ $nama }}</h5>
    <p>{{ $email }}</p>
    <img src="{{ asset('img/' . $image) }}" alt="{{ $nama }}" width="100">
</body>
</html>