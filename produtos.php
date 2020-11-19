<?php
$servidor = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

// Criando a conexão
$conn = mysqli_connect($servidor, $username, $password, $database);

//Verificando a conexão
if (!$conn){
  die("A conexão ao BD falhou:" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale = 1, shirink-to-fit=no">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>

    <div class="container-fluid">
        

        <?php
            include('menu.html');
        ?>
    </div>


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

        <?php

            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
 
  
        ?>
            <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" onclick="destaque(this)">
                <img src="<?php echo $rows["imagem"];?>" width="120px"  >
                <br>
                <p class="descrição"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p class="descrição"><strike><?php echo $rows["preco"]; ?></strike></p>
                <p class="preço"><?php echo $rows["precofinal"]; ?></p>
                <br>
            </div>
            <?php
             
            }
           } else {
           echo"Nenhum produto cadastrado!";
            }

            ?>
        </section>
    </div>

    <footer id="rodapé">
        <p id="formas_pagamento"><b>Formas de pagamento</b></p>
        <img src="./imagens/forma de pagamento.png">
        <p>&copy; Recode Pro</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>