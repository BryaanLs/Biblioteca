<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/messages.css">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <title>Banca do zé</title>
</head>

<body>
    <header>

        <div class="topbar">
            <div class="logo-left">
                <img src="../imagens/favicon.png" alt="logo do zé">
            </div>
            <h1>Banca do zé</h1>
            <div class="user_login">
                <form action="../dados/login.php" method="POST" id="login">

                    <label for="login">Usuário:</label>
                    <input type="text" name="usuario" placeholder="E-mail/Usuário" required>

                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" placeholder="*******" required>
                </form>
            </div>
            <button type="submit" class="btn_login" form="login">Login</button>
        </div>
    </header>
    <?php
    include "../includes/errorLogin.php";
    include "../includes/errorCadastro.php";
    ?>
    <main>
        <div class="card_cadastro">
            <h1>Cadastre-se</h1>
            <form action="../dados/cadastro.php" method="POST" id="cad">
                <div class="user_cadastro_e">
                    <label for="email">E-mail:</label><br>
                    <input type="email" placeholder="example@hotmail.com" name="email" required><br>

                    <label for="tel">Celular</label><br>
                    <input type="text" placeholder="(00) 9 0000-0000" name="tel" maxlength="11" required><br>

                    <label for="cpf">CPF:</label><br>
                    <input type="text" placeholder="123.456.789-10" name="cpf" required maxlength="11"><br>

                </div>
                <div class="user_cadastro_d">
                    <label for="nome_user">Usuário</label>
                    <input type="text" name="nome_user" placeholder="Marcos Souza" required>
                    <label for="pass_user">Senha:</label>
                    <input type="password" name="pass_user" placeholder="*******" required>
                    <label for="repeat_pass_user">Repita a Senha:</label>
                    <input type="password" name="repeat_pass_user" placeholder="*******" required>
                </div>
            </form>
            <button type="submit" form="cad">Cadastrar</button>
        </div>
    </main>
</body>

</html>