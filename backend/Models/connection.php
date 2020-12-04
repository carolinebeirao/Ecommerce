<?php

    class Connection { 
        public static function conectar ()
        {
            $conexao = new PDO ('mysql:host=localhost;dbname=fseletro;charset=utf8','root','');
            if ($conexao){
                return $conexao;
        } else {
            return 'no connection';
        }  
    }
}
?>