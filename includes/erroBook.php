<?php
include "../includes/conexao.php";

if (isset($_GET['datam'])) {
    echo "<span class='datam'> A data de emprestimo deve ser maior que a data de hoje!</span>";
} elseif (isset($_GET['dataL'])) {
    echo "<span class='dataL'>A data de devolução não pode ser menor que a data de emprestimo</span>";
} elseif (isset($_GET['dataM'])) {
    echo "<span class='dataM'>A data de devolução não pode ser maior que 30 dias (1 mês)</span>";
} elseif (isset($_GET['sucesso'])) {
    echo "<span class='sucess'>Livro cadastrado com sucesso!</span>";
} elseif (isset($_GET['jposs'])) {
    echo '<span class="jposs"> Você já pegou este livro! </span> ';
}



/*  elseif (isset($_GET['sucesso'])) {
    echo "<span class='sucess'>Livro cadastrado com sucesso!</span>";
}
 */