<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CursosMill</title>
    @vite(['resources/css/app.css', 'resources/css/login.css'])
</head>

<body>
    <main class="main">
        <div class="home">
            <a href="{{url('/')}}">
                &lt;
            </a>
        </div>

        <div class="login-box">
            <h1>Fazer login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">Email*</label>
                <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Digite seu e-mail" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" style="margin-top: 0.5rem;" />

                <label for="email">Senha*</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" style="margin-top: 0.5rem;" />

                <button value="submit" class="btn" id="submit-btn">Entrar</button>
            </form>
            <div class="nova-conta">
                <p>Não tem uma conta?</p>
                <a href="{{route('register')}}">Cadastrar</a>
            </div>
        </div>
    </main>

</body>

</html>