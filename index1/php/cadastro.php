<?php

    include 'connection.php';

    $email = $_POST ['email'];
    $senha = md5 ( $_POST ['senha'] );

    $validar = "SELECT `email` FROM `tbLogin` WHERE `email` = '". $email ."'";
    $test_query = mysqli_query ( $link , $validar );
    $array = mysqli_fetch_array ( $test_query );
    $logarray = $array ['email'];

    if ( $logarray == $email ) {

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já está cadastrado!');window.location.href='../cadastro.html';</script>";
        exit;

    } else {

        $cadastro = "INSERT INTO `tbLogin` VALUES ( '". $email ."' , '". $senha ."' )";
        $query = mysqli_query ( $link , $cadastro );

        header ( 'location: ../index.html' );

    }

?>