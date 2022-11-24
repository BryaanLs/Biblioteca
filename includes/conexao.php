<?php


$conn = mysqli_connect("localhost", "root", "", "banca");


if ($conn == false) {
    die("ERRO: Não conseguiu conectar no MySQL. " . mysqli_connect_error());
}
