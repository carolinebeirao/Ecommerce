<?php
require'Connection.php';
    
class pedidos {
    public $idpedidos;
    public $nome;
    public $endereco;
    public $telefone; 
    public $nomeproduto;
    public $valorunidade;
    public $valortotal;

    function recebepedidos (){
      $conexao = Connection::conectar();
      $stmt = $conexao -> query('select * from pedidos');
      return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}
?>