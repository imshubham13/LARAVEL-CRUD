<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <div>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
    </div>
    <h1>Login</h1>
    <form action="/checklogin" method="post">
        @csrf
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br><br>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <br><br>
        <button type="submit">Login</button>

    </form>
</body>

</html>
