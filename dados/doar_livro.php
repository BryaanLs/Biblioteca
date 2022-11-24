<?php
include "../includes/conexao.php";
include "../includes/autentica.php";

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO livros VALUES (NULL, '$nome', '$categoria')";

$select = "SELECT nome FROM livros where nome = '$nome'";

$res = mysqli_query($conn, $select); // VERIFICAÇÃO DE LIVRO EXISTENTE
$qtderegistros = mysqli_num_rows($res); //CONTAGEM DE REGISTRO CASO EXISTA

/* $row = mysqli_fetch_assoc($res); //INSERIR LIVRO NA TABELA */

if ($qtderegistros > 0) {
    //Header com includer com mensagem de erro para livro existente
    header('Location: ../php/newbook.php?exis=1');
} elseif ($qtderegistros == 0) {
    $res = mysqli_query($conn, $sql);
    header('Location: ../php/newbook.php?cad=1');
}
