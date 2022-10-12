
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Registre-se</title>
    <link rel="stylesheet" href="/bomb.sp/style2.css">
</head>
<body>
<main class="container">
        <h2>Registre-se</h2>
        <form action="/bomb.sp/insere.php" method="POST">
            <div class="input-field">
                <input type="email" name="email" id="email" autocomplete="off" required placeholder="Insira Seu Email">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" autocomplete="off" required placeholder="Insira Sua Senha">
                <div class="underline"></div>
            </div> <br>
            <div class="input-field">
                <input type="password" name="senha" id="senha" autocomplete="off" required placeholder="Repita Sua Senha">
                <div class="underline"></div>
            </div> <br>
            <div class="remember-me">
                <input type="checkbox"><p>Lembrar de Mim</p>
            <input type="submit" value="Continuar"><br>
        </form>

        <p>Já Possui Cadastro?</p>
        <a href="/bomb.sp/login.html"><input type="button" class="register" value="Logar"></a>
    </main>
</body>

</html>