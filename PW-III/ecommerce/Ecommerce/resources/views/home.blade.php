<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    @auth
        <p>{{Auth::user()->name}}</p>
        <a href="{{route('user.logout')}}">Logout</a>
    @else
        <h1>Loja</h1>
        <a href="/login">Login</a>
        <a href="/signup">Sign up</a>
    @endauth
</body>
</html>