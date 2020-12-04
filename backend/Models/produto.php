<?php
require'Connection.php';
    
class produto {
    public $idproduto;
    public $categoria;
    public $descricao;
    public $preco;
    public $precofinal
    public $imagem

    function recebeprodutos (){
      $conexao = Connection::conectar();
      $stmt = $conexao -> query('select * from produto');
      return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}
?>