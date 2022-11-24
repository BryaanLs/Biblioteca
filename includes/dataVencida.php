<?php
include "../includes/conexao.php";
include "../includes/autentica.php";
$id = $_SESSION['id'];
$sql = "SELECT nomeLivro, emprestou, devolver FROM livros_user where cod_user = '$id' and curdate() > devolver";
$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    echo '<option>'

        . "Livro:&nbsp;&nbsp;" . $row['nomeLivro'] . "&nbsp;&nbsp;&nbsp;&nbsp;"
        . $row['emprestou'] . "&nbsp;&nbsp;&nbsp;&nbsp; ⇄ &nbsp;&nbsp;&nbsp;&nbsp;"
        . $row['devolver']

        . '</option>';
}
