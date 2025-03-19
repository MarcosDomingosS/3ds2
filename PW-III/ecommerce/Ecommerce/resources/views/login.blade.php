<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('user.login')}}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="login_email" id="email">
        <label for="password">Senha</label>
        <input type="password" name="login_password" id="password">
        <button type="submit">Fazer Login</button>
    </form>
</body>
</html>