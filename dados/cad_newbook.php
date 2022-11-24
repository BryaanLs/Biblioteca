<?php
include "../includes/conexao.php";
include "../includes/autentica.php";

$livro = $_POST["nome_livro"];
$emprestou = $_POST["data_emprestimo"];
$devolver = $_POST["data_devolucao"];


$hoje = new DateTime();

$data_emprestimo = new DateTime($_POST["data_emprestimo"]);

$data_devolucao = new DateTime($_POST["data_devolucao"]);

$data_limite = new DateTime($_POST["data_emprestimo"]);

$data_limite = date_add($data_limite, date_interval_create_from_date_string('1 month'));


if (date_format($data_emprestimo, 'Y/m/d') < date_format($hoje, 'Y/m/d')) {
    header('Location: ../php/newbook.php?datam=1');
} elseif (date_format($data_devolucao, 'Y/m/d') < date_format($data_emprestimo, 'Y/m/d')) {
    header('Location: ../php/newbook.php?dataL=1');
} elseif (date_format($data_limite, 'Y/m/d') < date_format($data_devolucao, 'Y/m/d')) {
    header('Location: ../php/newbook.php?dataM=1');
} else {

    $livros = "SELECT * FROM livros WHERE nome = '$livro'"; // SELECT QUE VERIFICA LINHA QUE POSSUI O LIVRO ESCOLHIDO PELO USER
    $res = mysqli_query($conn, $livros); // EFETUANDO A PESQUISA
    $row = mysqli_fetch_assoc($res); //EFETUANDO O SELECT
    $categoria = $row['categoria']; //$row['categoria'] =  RETORNA O CAMPO "CATEGORIA" DO BD, E A VARIAVEL RECEBE O VALOR CATEGORIA
    $cod_livro = $row['cod']; // O MESMO SE REPETE PARA ESTE CAMPO
    $cod_user = $_SESSION['id']; //PEGANDO O CÓDIGO DO USUARIO LOGADO 
    $nome_user = $_SESSION['nome']; //PEGANDO O NOME DO USUARIO LOGADO


    $livrorep = "SELECT * FROM livros_user WHERE nomeLivro = '$livro'";
    $res2 = mysqli_query($conn, $livrorep);
    $qtderegistros = mysqli_num_rows($res2);

    if ($qtderegistros > 0) {
        header('Location: ../php/newbook.php?jposs=1');
    } else {

        $sql = "INSERT INTO livros_user
    (cod, cod_user, nome_user, nomeLivro, categoria, emprestou, devolver)
     VALUES
    ('$cod_livro','$cod_user','$nome_user','$livro','$categoria','$emprestou', '$devolver')";

        $inserir = mysqli_query($conn, $sql);
        header('Location: ../php/newbook.php?sucesso=1');
    }
}
