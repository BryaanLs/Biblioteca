<?php include "../includes/autentica.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/dados.css">
    <link rel="stylesheet" href="../estilos/messages.css">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <title>Meus Dados</title>
</head>

<body>
    <header>
        <div class="topbar">
            <div class="logo-left">
                <img src="../imagens/favicon.png" alt="logo do zé">
                <h1>Banca do zé</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="book.php" target="_self" rel="prev">Inicio</a></li>
                    <li><a href="dados.php" target="_self" rel="prev">Perfil</a></li>
                    <li><a href="../includes/logout.php" target="_self" rel="prev">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <?php include "../includes/erro_novos_dados.php" ?>
    <main>
        <div class="card_user">
            <h1>Meus dados</h1>
            <div class="dados_user">
                <label for="name_user">Nome do usuário</label>
                <input type="text id=" name="name_user" value="<?php echo $_SESSION['nome']; ?>" readonly>
                <label for="cod_user">Código do usuário</label>
                <input type="number" id="cod_user" value="<?php echo $_SESSION['id']; ?>" readonly>
            </div>
        </div>

        <div class="alterar_dados">
            <h1>Alterar dados</h1>
            <form action="../dados/recebedados.php" method="POST" id="dados">
                <label for="new_name">Novo nome</label>
                <input type="text" name="new_name" placeholder="Zé da banca" required>
                <label for="senha_atual_user">Senha</label>
                <input type="password" name="senha_atual_user" placeholder="••••••••" required>
                <label for="new_pass">Nova senha</label>
                <input type="password" name="new_pass" placeholder="••••••••" required>
                <label for="confirm_pass">Cofirme a senha</label>
                <input type="password" name="confirm_pass" placeholder="••••••••" required>
            </form>
            <button type="submit" form="dados">Salvar alterações</button>
        </div>

    </main>
    <footer>
        <h1>Criador do projeto</h1>
        <ul>
            <li>Bryan Soares</li>
            <li><a href="https://github.com/BryaanLs" target="_blank"><img src="../imagens/git.png"></a></li>
            <li><a href="https://www.instagram.com/bryaan_ls/" target="_blank"><img src="../imagens/insta.png"></a></li>
            <li><a href="https://www.linkedin.com/in/bryaanls/" target="_blank"><img src="../imagens/linkedin.png"></a></li>
        </ul>
    </footer>
</body>

</html>