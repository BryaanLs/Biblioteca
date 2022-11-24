<?php require "../includes/autentica.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos/book.css">
    <link rel="stylesheet" href="../estilos/messages.css">
    <title>Meus Livros</title>
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
    <main>
        <div class="livros">
            <ul>
                <li>
                    Meus livros
                    <select id="emprestados">
                        <option value="">Livros emprestados</option>
                        <?php include "../includes/bd_livros_user.php"; ?>
                    </select>
                </li>
                <li>
                    Datas vencidas
                    <select id="vencidos">
                        <option value="">Livros vencidos</option>
                        <?php include "../includes/dataVencida.php"; ?>
                    </select>
                </li>
            </ul>
            <div class="btn_cadastro">
                <a href="newbook.php" target="_self" rel="next">Novo livro</a>
            </div>
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