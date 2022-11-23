<?php

include 'conexção.php';

$buscar_cadastro = "SELECT * FROM tbProduto";
$query_cadastros = mysqli_query($conxx, $buscar_cadastro);

?>