<?php include "../includes/autentica.php";
?>
<!DOCTYPE html>
<html lang="pt-br">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/newbook.css" type="text/css">
    <link rel="stylesheet" href="../estilos/messages.css">
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
    <title>Cadastrar Livro</title>
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
    <?php include "../includes/erroBook.php" ?>
    <main>
        <div class="cadastro">
            <h1>Pegar um novo livro</h1>
            <form action="../dados/cad_newbook.php" method="POST" id="cadastrar_livro">
                <!-- Nome do livro -->
                <label for="nome_livro">Nome do livro</label>
                <select required name="nome_livro" id="nome_livro">
                    <option value="">Livros disponiveis</option>
                    <?php include "../includes/bd_livros.php";
                    ?>
                </select>
                <label for="data_emprestimo">Data de emprestimo</label>
                <input type="date" name="data_emprestimo" id="data_emprestimo" required>
                <!-- Data de devolução -->
                <label for="data_">Data de devolução</label>
                <input type="date" name="data_devolucao" id="data_devolucao" required>
                <!-- Botão de envio de formulario -->
            </form>
            <div class="btn_cad_livro">
                <button type="submit" form="cadastrar_livro">Cadastrar</button>
            </div>
        </div>
        <div class="registrar">
            <h1>Doar um livro</h1>
            <form action="../dados/doar_livro.php" method="POST" id="livro">
                <label for="">Nome do livro</label>
                <input type="text" maxlength="40" name="nome">
                <label for="Categoria">Categoria</label>
                <input type="text" name="categoria">
                <?php include "../includes/erro_doar_livro.php"; ?>
            </form>
            <button type="submit" form="livro">Doar livro</button>
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