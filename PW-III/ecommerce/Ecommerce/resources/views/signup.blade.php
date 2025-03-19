<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <form action="{{route('user.signup')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="signup_name" id="name">
        <label for="email">Email</label>
        <input type="email" name="signup_email" id="email">
        <label for="password">Senha</label>
        <input type="password" name="signup_password" id="password">
        <button type="submit">Fazer Cadastro</button>
    </form>
</body>
</html>