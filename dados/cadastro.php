<?php
//conecta ao bd
include "../includes/conexao.php";


$email = $_POST["email"];
$celular = $_POST["tel"];
$cpf = $_POST["cpf"];
$nome = $_POST["nome_user"];
$senha = $_POST["pass_user"];
$repete_senha = $_POST["repeat_pass_user"];


$sql = "INSERT INTO usuarios
(nome, email, cpf, celular, senha_user)
 VALUES
('$nome', '$email', '$cpf', '$celular', '$senha')";

$search = "SELECT * FROM usuarios WHERE email = '$email' OR nome = '$nome'";

$res = mysqli_query($conn, $search);

$qtdeRegistros = mysqli_num_rows($res);

if ($_POST["pass_user"] != $_POST["repeat_pass_user"]) {
    header('Location: ../php/index.php?errorpass=1');
}

if ($qtdeRegistros > 0) {
    header('Location: ../php/index.php?registerfail=1'); //CASO JA EXISTA UM USUARIO COM O EMAIL
} elseif ($_POST["pass_user"] != $_POST["repeat_pass_user"]) {
    header('Location: ../php/index.php?errorpass=1');
} elseif (mysqli_query($conn, $sql)) {
    header('Location: ../php/index.php?sucess=1');
}
