<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $produtos = array(['imagem'=>'../img/imagem_categ/Botas/botA1,.png''descricao'=>'Anabela exemplo1','cor'=>'Laranja','preço'=>'200'],
    ['descricao'=>'Anabela exemplo2','cor'=>'Azul','preço'=>'220'],
    ['descricao'=>'Anabela exemplo3','cor'=>'Rosa','preço'=>'180']);

    foreach ($produtos as $key => $value) {
        <div>
        <img src="<?php echo $value['imagem']?>"></img>
        <a href="?adicionar=<?php echo $key ?>"></a>
        </div>
    }
    ?>

    

    <?php
        if (isset($_GET['adicionar'])){
            $id_produto = (int) $_GET['adicionar'];
            if (isset($produtos[$id_produto])){
                $id_produto = (int) $_GET['adicionar'];
            }
        }
    ?>
</body>
</html>
