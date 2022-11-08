<?php
$host = 'localhost'
$user = 'hoot'
$passwd = ''
$db_nome = 'Ch@v3Elegance'

$conxx =  mysqli_connect($host,$user,$passwd,$db_nome)

if ($conxx) {
    echo 'conectou'
}else {
    'erro'
}


?>