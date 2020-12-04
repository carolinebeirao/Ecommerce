<?php
require'Connection.php';
    
class comentarios {
    public $idcomentarios;
    public $nome;
    public $msg;
    public $data; 

    function recebecomentarios (){
      $conexao = Connection::conectar();
      $stmt = $conexao -> query('select * from comentario');
      return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}
?>