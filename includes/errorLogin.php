<?php
//conecta ao bd
include "../includes/conexao.php";


if (isset($_GET['erro'])) {
    echo "<span class='erroL'>E-mail e/ou senha incorreto(s)!</span>";
} elseif (isset($_GET['autentica'])) {
    echo "<span class='erroL'>Acesso negado! Efetue login.</span>";
} elseif (isset($_GET['sucess'])) {
    echo "<span class='sucess'> Cadastro concluido! Efetue login. </span>";
}
