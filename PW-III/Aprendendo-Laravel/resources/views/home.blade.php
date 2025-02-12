<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth 
    <p>Tá logado</p>
    <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>

    @else
        <div style="border: 3px solid black">
            <h2>Register</h2>
            <form action="/register" method="post">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="email" placeholder="email@email.com" name="email">
                <input type="password" placeholder="senha" name="password">
                <input type="submit" value="Registrar">
            </form>
        </div>
        <br>
        <div style="border: 3px solid black">
            <h2>Login</h2>
            <form action="/login" method="post">
                @csrf
                <input type="text" name="loginname" placeholder="name">
                <input type="password" placeholder="senha" name="loginpassword">
                <input type="submit" value="Confirmar">
            </form>
        </div>
    @endauth


    </body>
</html>