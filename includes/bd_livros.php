<?php
include "../includes/conexao.php";
include "../includes/autentica.php";

$livros = "SELECT * FROM livros";
$res = mysqli_query($conn, $livros);

while ($row = mysqli_fetch_assoc($res)) {

    echo '<option value"' . $row['cod'] . '">' . $row['nome'] . '</option>';
}
