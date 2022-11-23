<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="cadastro.js">
    <title>Cadastro de produto</title>
</head>
<body>
<header>
        <div class="container-fluid text-center">
            
           <div class="row">
            <div class="col-11 pt-3 pb-1">
                <h2>Ellegance Calçados</h2>
            </div>
            <div class="col-1 pt-3 pb-3">
                <a class="d-flex justify-content-center icon"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class=" fa-solid fa-user d-flex mt-3" style="color: #fff; scale: 2;"></i></a>
            </div>
        </div>

<!-- -=-=- | Inicio do Pop - Up | -=-=- -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" ria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" style="color: #000 ;" id="exampleModalLabel">Login</h5>
                                <button type="button" class="btn-close col-1" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="php/login.php" method="post">
                                <div class="modal-body row d-flex justify-content-between">
                                <div class="col-12 col-lg-6 ">
                                    <input type="text" name="email" class="rounded" required placeholder="Informe seu email:"> <br>
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3 mt-lg-0 pb-3">
                                    <input type="password" name="senha" class="rounded" required placeholder="Informe sua senha:"> <br>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <a href="cadastro.html" class="bt_fechar col-5 btn btn-secondary">
                                       Cadastrar
                                    </a>
                                    <button type="submit" class="bt_logar col-5 btn btn-info" > <span class="bt_whatsapp">Logar</span>
                                    </button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!-- -=-=- | FIm do Pop - Up | -=-=- -->
            </div>
           </div>
        </div>
    </header>
    <!-- -=-=- | Inicio do Pop - Up | -=-=- -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" ria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title col-10" id="exampleModalLabel">Informe seus dados:</h5>
                    <button type="button" class="btn-close col-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input class="form-control me-1" type="search" placeholder="Informe sobre o produto" aria-label="Search">
                        <h5 class="pt-3">Insira a imagem</h5>
                        <input type="file" name="imag" id="imag">
                        <h5 class="pt-3">Escolha as cores</h5>
                        <input type="color" id="cor1">
                        <h5 class="pt-3">A qual categoria esse produto pertence</h5>
                        <select class="mt-3">
                            <option value="Cartão de Crédito">
                                <p onclick="paymentselected(this)" for="Cartão de Crédito">Anabela</p>
                            </option>
                            <option onclick="paymentselected(this)" value="">
                                <p>Sapatenis</p>
                            </option>
                            <option onclick="paymentselected(this)" value="">
                                <p>Scarpin</p>
                            </option>
                            <option onclick="paymentselected(this)" value="">
                                <p>Salto</p>
                            </option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="botexc col-5" data-bs-dismiss="modal">
                        <span >Fechar</span>
                    </button>
                    <button type="button" class="botad col-5" onclick="gotowhatsapp()"> <span>Cadastrar</span>
                    </button>
                </div>
            </div>
        </div>
    </div><!-- -=-=- | FIm do Pop - Up | -=-=- -->
    <!-- -=-=- | Inicio do Pop - Up 2 | -=-=- -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" ria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title col-10" id="exampleModalLabel">Informe seus dados:</h5>
                    <button type="button" class="btn-close col-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <h5>Anabela listrada</h5>
                        <input class="form-control me-1" type="search" placeholder="Altere o nome do produto" aria-label="Search">
                        <img class="img pt-3" src="../img/imagem_categ/Rectangle 8.png" alt="">
                        <h5 class="pt-3">Altere a imagem</h5>
                        <input type="file" name="imag" id="imag">
                        <h5 class="pt-3">Altere as cores</h5>
                        <input type="color">
                        <h5 class="pt-3">Altere a categoria do produto</h5>
                        <select class="mt-3">
                            <option value="Cartão de Crédito">
                                <p onclick="paymentselected(this)" for="Cartão de Crédito">Anabela</p>
                            </option>
                            <option onclick="paymentselected(this)" value="">
                                <p>Sapatenis</p>
                            </option>
                            <option onclick="paymentselected(this)" value="">
                                <p>Scarpin</p>
                            </option>
                            <option onclick="paymentselected(this)" value="">
                                <p>Salto</p>
                            </option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="botexc col-5" data-bs-dismiss="modal">
                        <span >Fechar</span>
                    </button>
                    <button type="button" class="botad col-5" onclick="gotowhatsapp()"> <span>Cadastrar</span>
                    </button>
                </div>
            </div>
        </div>
    </div><!-- -=-=- | FIm do Pop - Up 2 | -=-=- -->
    <div class="container pt-4">
        <div class="conteudo">
            <div class="row azul">
                <h2 class="d-flex justify-content-center">Catalogo de produtos</h2>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="botad">Adicionar Produto</button>
                    </div>
                </div>
                <div class="pt-5"></div>
            </form>
            <div class="">
            <?php
                $pdo = new PDO('mysql:host=localhost;dbname=ellegance','root','');
                
                $sql = $pdo->prepare("SELECT * FROM tbprod");
                $sql->execute();
                $info = $sql->fetchALL();
                
                foreach ($info as $key => $value) {
                    echo 'Produto: '.$value['descricao'];
                    echo '<br/>Cor: '.$value['cor'];
                    echo '<br/>Tipo de Calçado : '.$value['tipo'];
                    echo '<br/>Preço: R$'.$value['preco'];
                    echo '<hr>';
                }
            ?>
            </div>
        </div>
    </div>
    
</body>