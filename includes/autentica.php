<?php
//(Re)iniciar sessão
session_start();

//Se !NÃO foi criada uma sessão autenticada
//Se !NÃO existe (isset) o valor cod_user armazenado na sessão
if (!isset($_SESSION['id'])) {
    header('Location: ../php/index.php?autentica=1');
}
