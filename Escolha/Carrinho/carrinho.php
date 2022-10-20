<html>
    <head>
        <!-- -=-=-| HTML |-=-=- -->
        <meta charset="UTF-8">
        <meta name="description" content="Elegance">
        <meta name="keywords" content="Sapatos, Anabela, Tamanco,">
        <meta name="author" content="Gabriel Martins, Breno Rodrigues">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- -=-=-| LINKS |-=-=- -->
        <link rel="stylesheet" href="Carrinho.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <title>Carrinho</title>
    </head>
    <body class="cor">
    <body class="body pagina cor">
        <!-- -=-=-| Cabeçalho Inicio |-=-=- -->
        <header>
            <div class="container-fluid cabecalho">
                <div class="row cont">
                    <div class="col d-flex justify-content-between">
                        <a href="../Index/Index.html"> <img src="../../imagens/img-cabecalho/logo"  class="logo" alt="Logo da Empresa"></a>
                        <h4 class="texto" >Compras Feitas Pelo Whatsapp</h4> 
                        <a href="../Carrinho/carrinho.php"> <img src="../../imagens/img-cabecalho/carrimho.png"  style="padding: 10px ;" class="carrinho" alt="Carrinho de Compras"></a>
                    </div>
                </div>
            </div>
        </header>
    <!--Cabeçalho Fim-->
    <!--Produtos inicio-->
    <main class="conteudo">
        <div class="container">
            <div class="caixa">
                <div class="row ">
                    <h2 class="d-flex justify-content-center">Carrinho de Compras</h2>
                </div>
                <div class="row">
                    <div class="col-4">
                        <input type="checkbox" class="todosp" name="todosp" checked>
                        <label for="todosp">Todos os produtos</label>
                    </div>
                    <div class="col-8"></div>
                </div>
            </div>
            <div class="pad"></div>
            <div class="caixa pt-4">
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" class="todosp" name="todosp" checked>
                        <label for="todosp"></label>
                    </div>
                    <div class="col-2">
                        <img class="prod" src="../imagens/Produto/anabela.png" alt="">
                    </div>
                    <div class="col-5">
                        <h5>Produto generico de cor e tamanho aleatorio</h5>
                    </div>
                    <div class="quantidade">
                        <button type="button" onclick="this.parentNode.querySelector('[type=number]').stepDown();" class="bot">
                            <p>-</p>
                        </button>
                        
                        <input type="number" name="number" min="1" max="10" value="1">
                        <!--readonly-->
                        
                        <button type="button" onclick="this.parentNode.querySelector('[type=number]').stepUp();"class="bot">
                            <p>+</p>
                        </button>
                        </div>
                    <div class="col-1">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="pad"></div>
            <div class="caixa">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <h5>Total:</h5>
                    </div>
                    <div class="botW">
                        <div class="col-sm-6 col-md-6">
                            <button class=" d-flex justify-content-end">
                                <img class="icone" src="../imagens/img-rodape/whatsapp.png" alt="">
                                Compras por Whatsapp
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Produtos Fim-->
    <!-- -=-=-| Footer Inicio |-=-=- -->

    <footer class="rodape pt-4">
        <div class="container">
            <div class="row">
                <div class="col-4 "><hr></div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-6 d-flex justify-content-center">
                            <a href="https://www.instagram.com/"><img class="icon" src="../../imagens/img-rodape/instagram.png" alt=""></a>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <a href="https://www.whatsapp.com/?lang=pt_br"><img class="icon" src="../../imagens/img-rodape/whatsapp.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-4 "><hr></div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-3">
                        <h4 style="color: #ffffff;">@elegancecalçados</h4>
                    </div>
                </div>
        </div>
    </footer>
    <!-- -=-=-| Footer Fim |-=-=- -->
    </body>
</html>