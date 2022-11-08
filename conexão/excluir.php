<?php

include 'conexão.php'

$id = $_POST['id']

$recebe_cadastro = "DELETE FROM tbProduto WHERE id = '$id'";
$query_cadastros = mysqli_query($conxx, $recebe_cadastro)

header('location:listagem.php')
?>