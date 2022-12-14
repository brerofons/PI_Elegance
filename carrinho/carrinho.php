<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="carrinho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c65e50066a.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/img/imagem_inicial/thumbnail_elegance.ico">
    <title>Carrinho</title>
</head>
<body>
        <!-- Cabecalho Inicio -->
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
                        <input type="text" id="nome" placeholder="Informe seu nome:">
                        <div class="form-group">
                            <select class="mt-3">
                                <option onclick="paymentselected(this)" value="">
                                    <p>Metodo de Pagamento</p>
                                </option>
                                <option value="Cartão de Crédito">
                                    <p  onclick="paymentselected(this)" for="Cartão de Crédito">Cartão de Crédito</p>
                                </option>
                                <option onclick="paymentselected(this)" value="">
                                    <p>Cartão de Débito</p>
                                </option>
                                <option onclick="paymentselected(this)" value="">
                                    <p>Dinheiro</p>
                                </option>
                                <option onclick="paymentselected(this)" value="">
                                    <p>Pix</p>
                                </option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="bt_carrinho col-5" data-bs-dismiss="modal">
                            <span style="color: white;">Fechar</span>
                        </button>
                        <button type="button" class="bt_whatsapp col-5" onclick="gotowhatsapp()"> <span class="bt_whatsapp">WhatsApp</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- -=-=- | FIm do Pop - Up | -=-=- -->
        <nav>
            <div class="container">
                <div class="row">
                <a href="../index1/index.html" class="col-3 d-flex justify-content-center azul">
                    <div ><span>Home</span></div>
                </a>
                <a href="../index1/#categoria" class="col-3 d-flex justify-content-center azul">
                    <div><span>Categorias</span></div>
                </a>
                <a href="../sobre/sobre.html" class="col-3 d-flex justify-content-center azul">
                    <div><span>História</span></div>
                </a>
                <a href="../carrinho/carrinho.php" class="col-3 d-flex justify-content-center selecionado">
                    <div><span>Carrinho</span></div>
                </div>
            </div>
        </nav>
        <!-- Cabecalho Fim -->
        
        <!-- Historia Inicio -->
        <main class="conteudo">
            <div class="container">
                <div class="pt-5"></div>
                <div class="row">
                    <h2 class="d-flex justify-content-center azulu">Carrinho de compras</h2>
                </div>
                <form>
                    <div class="row">
                        <div class="produ d-flex justify-content-between align-items-center">
                            <input type="checkbox" name="prod1" id="prod1" checked>
                            <img src="../img/imagem_categ/Rectangle 11.png" class="imgcar" alt="">
                            <h3>Anabela Salto alto</h3>
                            <h5>Tamanho:44</h5>
                            <h5>Cor: Azul</h5>
                        </div>
                    </div>
                    <div class="pt-3"></div>
                    <div class="row">
                    
                    </div>
                    <div class="pt-3"></div>
                    <div class="row">
                        <div class="produ d-flex justify-content-end">
                            <button class="botz" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Compre pelo WhatsApp</button>
                        </div>
                    </div>        
                </form>            
                
            </div>
        </main>
        <!-- Historia Fim -->
        <!-- Rodape Inicio -->
        <div class="pt-5"></div>
            <footer class="rodape">
                <div class="row color_rodape">
                    <div class="col-lg-6 col-sm-12 text-center ">
                        <div class="color_rodape"><h3>Sobre nos</h3></div>
                        <div><a href="../sobre/sobre.html" class="color_rodape"><span>História</span></a></div>
                    </div>
                    <div class="col-lg-6 col-sm-12 text-center">
                        <div><h3>Contatos</h3></div>
                       <div><span> WhatsApp: (31) 9 7317-9350</span></div>
                        <div><span>ellegancecalcados@gmail.com</span></div>
                    </div>
                </div>
            </footer>
        <!-- Rodape Fim -->  
</body>
</html>