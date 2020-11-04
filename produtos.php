<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="js/index.js"></script>
</head>
<body>

    <nav class="menu" >
        <a href="index.php"><img width="70px" src="./imagens/LOGO.png" alt="full stack eletro"></a>
        <a href="produtos.php">Produtos</a>
        <a href="loja.php">Nossas Lojas</a>
        <a href="contato.php">Contato</a>
    </nav>

    <header>
        <h2>Produtos</h2><hr>
    </header>

    <div class="produtos">

        <section class="categorias">
            <h3>Categorias</h3>
                <ul>
                    <li onclick="exibir_todos()">Todos (12)</li>
                    <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibir_categoria('fogao')">Fogões (2)</li> 
                    <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                    <li onclick="exibir_categoria('lava roupas')">Lava roupas (2)</li>
                    <li onclick="exibir_categoria('lava louças')">Lava louças(2)</li>
                </ul>        
        </section>

        <section>

            <div class="box_produto" id="geladeira" onclick="destaque(this)">
                <img src="./imagens/produtos/Geladeira Fross Free Brastemp Side Inverse 540 Litros.jpg" width="120px"  >
                <br>
                <p class="descrição">Geladeira Fross Free Brastemp Side Inverse 540 Litros</p>
                <hr>
                <p class="descrição"><strike>R$ 6.389,00</strike></p>
                <p class="preço">R$ 5.019,00</p>
                <br>
            </div>

            <div class="box_produto" id="geladeira" onclick="destaque(this)">
                <img src="./imagens/produtos/geladeira frost free brastemp 375 litros branca.jpg" width="120px">
                <br>
                <p class="descrição">Geladeira Frost Free Brastemp 375 litros Branca</p>
                <hr>
                <p class="descrição"><strike>R$ 5.199,00 </strike></p>
                <p class="preço">R$ 4.750,00</p>
                <br>
            </div>

            <div class="box_produto" id="geladeira" onclick="destaque(this)">
                <img src="./imagens/produtos/geladeira frost free consul prata 340 litros.jpg" width="120px">
                <br>
                <p class="descrição">Geladeira Frost Free Consul Side Prata 340 litros</p>
                <hr>
                <p class="descrição"><strike>R$ 3.389,00</strike></p>
                <p class="preço">R$ 2.019,00</p>
                <br>
            </div>

            <div class="box_produto" id="fogao" onclick="destaque(this)">
                <img src="./imagens/produtos/fogão 4 bocas consul inox com mesa de vidro.jpg" width="120px">
                <br>
                <p class="descrição">Fogão 4 Bocas Consul Inox com Mesa de Vidro</p>
                <hr>
                <p class="descrição"><strike>R$ 1.200,00</strike></p>
                <p class="preço">R$ 1.129,00</p>
                <br>
            </div>

            <div class="box_produto" id="fogao" onclick="destaque(this)">
                <img src="./imagens/produtos/Fogão 4 Bocas Electrolux 52lsv com Mesa Vidro Prata Bivolt.jpg" width="120px">
                <br>
                <p class="descrição">Fogão 4 Bocas Electrolux Bivolt</p>
                <hr>
                <p class="descrição"><strike>R$ 1.189,00</strike></p>
                <p class="preço">R$ 1.129,00</p>
                <br>
            </div>

            <div class="box_produto" id="microondas" onclick="destaque(this)">
                <img src="./imagens/produtos/microondas consul 32 litros inox 220v.jpg" width="120px">
                <br>
                <p class="descrição">Micro-ondas Consul 32 litros Inox 220v</p>
                <hr>
                <p class="descrição"><strike>R$ 580,00</strike></p>
                <p class="preço">R$ 409,99</p>
                <br>
            </div>

            <div class="box_produto" id="microondas" onclick="destaque(this)">
                <img src="./imagens/produtos/Micro-ondas Panasonic 32L Style ST67HSRUK Inox.jpg" width="120px">
                <br>
                <p class="descrição">Micro-ondas Panasonic 32L Inox</p>
                <hr>
                <p class="descrição"><strike>R$ 612,00</strike></p>
                <p class="preço">R$ 599,00</p>
                <br>
            </div>

            <div class="box_produto" id="microondas"onclick="destaque(this)">
                <img src="./imagens/produtos/Forno de Micro-ondas Electrolux 31L.jpg" width="120px">
                <br>
                <p class="descrição">Micro-ondas Electrolux 31L</p>
                <hr>
                <p class="descrição"><strike>R$ 422,00</strike></p>
                <p class="preço">R$ 399,99</p>
                <br>
            </div>

            <div class="box_produto" id="lava roupas" onclick="destaque(this)">
                <img src="./imagens/produtos/lavadora de roupas brastemp 11kg com turbo performance Branca.jpg" width="120px">
                <br>
                <p class="descrição">Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca</p>
                <hr>
                <p class="descrição"><strike>R$ 1.600,00</strike></p>
                <p class="preço">R$ 1.214,00</p>
                <br>
            </div>

            <div class="box_produto" id="lava roupas" onclick="destaque(this)">
                <img src="./imagens/produtos/Lavadora de Roupas Brastemp BWK12AB 12Kg - Cesto Inox 12 Programas de Lavagem.jpg" width="120px">
                <br>
                <p class="descrição">Lavadora de Roupas Brastemp 12Kg com Turbo Performance</p>
                <hr>
                <p class="descrição"><strike>R$ 1.599,00</strike></p>
                <p class="preço">R$ 1.214,00</p>
                <br>
            </div>

            <div class="box_produto" id="lava louças" onclick="destaque(this)">
                <img src="./imagens/produtos/lava louça electrolux inox com 10 serviços  06 programas de lavagem e painel blue touch.jpg" width="120px">
                <br>
                <p class="descrição">Lava Louça Electrolux Inox com 10 Serviços 06 Programas de Lavagem e Painel Blue Touch</p>
                <hr>
                <p class="descrição"><strike>R$ 3.500,00</strike></p>
                <p class="preço">R$ 2.999,99</p>
                <br>
            </div>

            <div class="box_produto" id="lava louças" onclick="destaque(this)">
                <img src="./imagens/produtos/Lava-Louças Brastemp Inox com 14 Serviços, 06 Programas de Lavagem e Função Smart Sensor - BLF14AR.jpg" width="120px">
                <br>
                <p class="descrição">Lava-Louças Brastemp Inox com 14 Serviços, 06 Programas de Lavagem e Função Smart Sensor - BLF14AR</p>
                <hr>
                <p class="descrição"><strike>R$ 3.600,00</strike></p>
                <p class="preço">R$ 3.599,99</p>
                <br>
            </div>

        </section>
    </div>

    <footer id="rodapé">
        <p id="formas_pagamento"><b>Formas de pagamento</b></p>
        <img src="./imagens/forma de pagamento.png">
        <p>&copy; Recode Pro</p>
    </footer>

</body>
</html>