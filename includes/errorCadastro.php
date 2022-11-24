<?php
//conecta ao bd
include "../includes/conexao.php";

if (isset($_GET['registerfail'])) {
    echo "<span class='erro1'> E-mail e/ou Usuário já cadastrado! </span>";
} elseif (isset($_GET['errorpass'])) {
    echo "<span class='erro'> As senhas não conferem!</span>";
}
