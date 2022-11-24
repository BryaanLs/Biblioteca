<?php
include "../includes/conexao.php";
if (isset($_GET['exis'])) {
    echo "<span class='exis'> Esse livro já foi cadastrado! </span>";
} elseif (isset($_GET['cad'])) {
    echo "<span class='cad'> Cadastrado com Sucesso! </span>";
}
