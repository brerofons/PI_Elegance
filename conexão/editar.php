<?php

include 'conexão.php'

$id = $_POST['id']
$nome = $_POST['nome']
$tipo = $_POST['tipo']
$cor = $_POST['cor']
$taman = $_POST['tamanho']

$recebe_cadastro = "UPDATE
tbProduto
Set nome = '$nome', tipo = '$tipo', cor = '$cor', tamanho = '$taman' WHERE id = '$id'";

$query_cadastros = mysqli_query($conxx, $recebe_cadastro)

header('location:listagem.php')
?>