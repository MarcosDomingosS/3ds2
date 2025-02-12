<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    @auth 
    <p>Tá logado</p>
    <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>

    @else
    <header>
        <button id="cadastro">Cadastrar</button>
        <dialog id="modal">
        <div class="form">
            <h2>Register</h2>
            <form class="query" action="/register" method="post">
                @csrf
                <input class="input" type="text" name="name" placeholder="name">
                <input class="input"type="email" placeholder="email@email.com" name="email">
                <input class="input"type="password" placeholder="senha" name="password">
                <input class="input"type="submit" value="Registrar">
                <button id="ok">fechar</button>
            </form>
        </div>
        </dialog>

        <button id="login">Login</button>
        <dialog id="modal2">
        <div class="form">
            <h2>Login</h2>
            <form class="query" action="/login" method="post">
                @csrf
                <input class="input"type="text" name="loginname" placeholder="name">
                <input class="input"type="password" placeholder="senha" name="loginpassword">
                <input class="input"type="submit" value="Confirmar">
                <button id="ok2">fechar</button>
            </form>
        </div>
        </dialog>

    </header>
    @endauth

        <script src="{{asset('script.js')}}"></script>
    </body>
</html>