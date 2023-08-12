<?php

class Conexao{
    private $host = "localhost";
    private $usuarios = "root";
    private $senha = "";
    private $banco = "usuarios";
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=". $this->host.";dbname=". $this->banco,$this->usuarios,$this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro na conexão: ". $e->getMessage();
        }

        return $this->conn;
    }
}
?>