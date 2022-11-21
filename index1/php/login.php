<?php

    include 'connection.php';

    $email = $_POST ['email'];
    $senha = md5 ( $_POST ['senha'] );

    $login = "SELECT `email` , `senha` FROM `tbLogin` WHERE ( `email` = '". $email ."' ) AND ( `senha` = '". $senha ."' )";
    $query = mysqli_query ( $link , $login );

    if ( mysqli_num_rows ( $query ) != 1 ) {
        
        echo "Login inválido"; exit;

    }

    else {
        
        $save = mysqli_fetch_assoc ( $query );

        if ( !isset ( $_SESSION ) ) session_start ();

        $_SESSION [ 'email' ] = $save [ 'email' ];

        header ( 'location: ../home.php' ); exit;

    };

?>