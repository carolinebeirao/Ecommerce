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


if(isset($_POST['nome']) && isset($_POST['msg'])){
$nome = $_POST['nome'];
$msg = $_POST['msg'];

$sql = "insert into comentarios(nome, msg) values ('$nome','$msg')";
$result = $conn->query($sql);

}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale = 1, shirink-to-fit=no">
        <title>Contato</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="js/index.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
         integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        <?php
            include('menu.html');
        ?>

    <header>
        <div class="container">
            <h2>Fale Conosco</h2><hr>
        </div>
    </header>

        <div class="container text-center">
            <p><img src="./imagens/email.png" width="50px">contato@fullstackeletro.com <img src="./imagens/wzap.png" width="55px">(11) 99999-9999</p>
        </div>
 

        <div class="contaner">
            <div id="contato">
            <form method="post" action="">
                <div class="form-group">
                    <h4>Mande sua mensagem por aqui</h4>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" style="width: 400px;"> 
                    <br>  
                    <br>
                    <button class="btn btn-warning" type="submit" name="submit">Enviar </button>                  
                    <textarea style="height: 200px; width: 400px;"></textarea>     
                </div>                 
            </form>

            </div>
        </div>
    
   <?php

$sql = "select * from comentarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($rows = $result->fetch_assoc()){
    echo"Data: ",$rows['data'], "</br>";
    echo"Nome: ",$rows['nome'], "</br>";
    echo"Mensagem: ",$rows['msg'], "</br>";
    echo"<hr>";
   }
} else {
    echo"Nenhum comentário ainda!";
 }
 ?>
    <footer id="rodapé">
        <p>&copy; Recode Pro</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>