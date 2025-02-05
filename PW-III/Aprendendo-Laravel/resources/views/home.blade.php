<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    </body>
</html>