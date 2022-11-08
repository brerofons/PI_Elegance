<?php

include 'conexão.php'

$nome = $_POST['nome']
$tipo = $_POST['tipo']
$cor = $_POST['cor']
$taman = $_POST['tamanho']

$recebe_cadastro = "INSERT INTO
tbProduto
VALUES ('','$nome','$tipo','$cor','$taman')";

$query_cadastros = mysqli_query($conxx, $recebe_cadastro)

header('location:listagem.php')
?>