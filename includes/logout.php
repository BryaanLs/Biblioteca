<?php
//inici a sessão
session_start();

//exlui os dados armazenados do usuario na sessão após clica no botão "sair"
unset($_SESSION['id']);
unset($_SESSION['nome']);

header('Location: ../php/index.php');
