
<?php
   $servidor = "localhost";
   $username = "root";
   $password = "";
   $database = "fseletro";
   
   // Criando a conexão
   $conn = mysqli_connect($servidor, $username, $password, $database);

	if (!$conexao){
		die("A coenxão ao BD falhou:". mysqli_connect_error());
	}
	setlocale(lc_monetary, 'pt_BR');
	
	$sql = "select idcomentarios, msg, data from comentarios";
	$result = $conexao->query($sql);

	//echo $result->fetch_all();

	print_r( json_encode ($result->fetch_all(mysqli_assoc)) );
	header("Access-Control-Allow-Origin:*");

?>

