<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CursosMill</title>
    @vite(['resources/css/app.css', 'resources/css/cadastro.css'])

</head>

<body>
    <main class="main">
        <div class="home">
            <a href="{{ url('/') }}">
                &lt;</a>
        </div>
        <div class="login-box">
            <h1>Criar Conta</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="nome">Nome*</label>
                <input type="text" id="nome" name="name" placeholder="Digite seu nome" value="{{old('name')}}" required autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" style="margin-top: 0.5rem;" />


                <label for="email">Email*</label>
                <input type="text" id="email" name="email" placeholder="Digite seu e-mail" value="{{old('email')}}" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" style="margin-top: 0.5rem;" />

                <label for="password">Senha*</label>
                <input type="password" id="password" placeholder="Digite uma senha segura" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" style="margin-top: 0.5rem;" />

                <label for="repPassword">Confirmar Senha*</label>
                <input type="password" id="repPassword" placeholder="Repita sua senha" name="password_confirmation" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" style="margin-top: 0.5rem;" />

                <button class="btn" id="submit-btn" value="submit">Criar</button>
            </form>
            <div class="nova-conta">
                <p>Já tem uma conta?</p>
                <a href="{{ route('login') }}">Fazer login</a>
            </div>
        </div>
    </main>

</body>

</html>