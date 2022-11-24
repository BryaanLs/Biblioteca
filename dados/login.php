<?php
//conecta com o arquivo conexao.php que efetua a conexao com o bd
include "../includes/conexao.php";
include "../includes/autentica.php";

$login = $_POST["usuario"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE email = '$login' OR nome ='$usuario' AND senha_user = '$senha'";
$res = mysqli_query($conn, $sql);

//Obtem quantidade de registros encontrados
$qtdeRegistros = mysqli_num_rows($res);

if ($qtdeRegistros > 0) {
    //inicia sessão
    session_start();

    $row = mysqli_fetch_assoc($res);

    //Guarda as informações do usuário
    $_SESSION['id'] = $row['cod_user'];
    $_SESSION['nome'] = $row['nome'];

    header("Location: ../php/book.php");
} else {
    header("Location: ../php/index.php?erro=1");
}
