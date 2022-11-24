<?php
include "../includes/conexao.php";
include "../includes/autentica.php";

$cod_user = $_SESSION['id'];

$sql = "SELECT * FROM livros_user where cod_user = '$cod_user'"; //select para receber os dados de livros que o usuario cadastrou
$res = mysqli_query($conn, $sql); // iniciando o select

while ($row = mysqli_fetch_assoc($res)) {
    echo '<option>'

        . "&#128218;Livro:&nbsp;" . $row['nomeLivro'] . "&nbsp;&nbsp;&nbsp;&nbsp;"
        . "Devolver:&nbsp; ▶▶&nbsp;&nbsp;&nbsp;" . $row['devolver']
        . '</option>';
}
