<?php
include "../includes/conexao.php";
include "../includes/autentica.php";

// Dados fornecidos pelo usuario
$new_name = $_POST["new_name"];
$senha_atual = $_POST["senha_atual_user"];
$new_pass = $_POST["new_pass"];
$confirm_new_pass = $_POST["confirm_pass"];

//alterar dados do bd
$id = $_SESSION['id'];
$sql = "UPDATE usuarios SET nome ='$new_name', senha_user='$new_pass' WHERE cod_user = '$id'";


//pegando dados do bd 
$consulta = "SELECT nome, senha_user FROM usuarios where cod_user = '$id'";
$res2 = mysqli_query($conn, $consulta);
$row = mysqli_fetch_assoc($res2);
$nome_bd = $row['nome'];
$senha_bd = $row['senha_user'];

//verificação e validação para a alteração dos dados
if ($senha_atual != $senha_bd) {
    header('Location: ../php/dados.php?senbd=1');
} elseif ($new_pass != $confirm_new_pass) {
    //encaminhar para include com mensagem de erro senha nova diferente
    header('Location: ../php/dados.php?newp=1');
} elseif ($new_name == $nome_bd) {
    //encaminhar para include com mensagem de erro de nome igual
    header('Location: ../php/dados.php?namei=1');
} else {
    //encaminhar para include com mensagem de sucesso!
    $res = mysqli_query($conn, $sql);
    header('Location: ../php/dados.php?sucessful=1');
}
