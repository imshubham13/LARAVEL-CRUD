<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Home</h1>
    {{ $res }}

    @foreach ($res as $e)
        <h1>{{ $e->name }}</h1>
        <p>{{ $e->email }}</p>
        <p>{{ $e->gender }}</p>
        <p>{{ $e->dob }}</p>
        <p>{{ $e->course }}</p>
        <p>{{ $e->hobby }}</p>
        <img src="{{ asset('storage/' . $e->img) }}" width="200px" alt="" />
    @endforeach
</body>

</html>
