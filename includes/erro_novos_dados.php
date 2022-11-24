<?php
include "../includes/conexao.php";

if (isset($_GET['senbd'])) {
    echo "<span class='senbd'>Sua senha atual está incorreta!</span>";
} elseif (isset($_GET['newp'])) {
    echo "<span class='newp'> As senhas não conferem!</span>";
} elseif (isset($_GET['namei'])) {
    echo "<span class='namei'> Seu novo nome é igual ao nome atual!</span>";
} elseif (isset($_GET['sucessful'])) {
    echo "<span class='sucesso'>Dados alterados com sucesso! Efetue login novamente para ver seus dados atualizados!</span>";
}
