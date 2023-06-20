<?php

class Conexao
{
    private $host;
    private $user;
    private $senha;
    private $db;
    private $port;
    public $conn;

    public function __construct($host="localhost", $user="root", $senha="", $db="teste_pit", $port="3306")
    {
        $this->host = $host;
        $this->user = $user;
        $this->db = $db;
        $this->senha = $senha;
        $this->port = $port;

        $this->connectDB($this->host, $this->user, $this->senha, $this->db, $this->port);
    }

    private function connectDB($host, $user, $password, $db, $port)
    {
        try
        {
            $dsn = "mysql:host=".$host.";port=".$port.";dbname=".$db."";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $this->conn = new PDO($dsn, $user, $password, $options);

        }   catch (PDOException $erro)
            {
                echo "<script>alert('Deu merda na conexão com o banco. Erro: {$erro}')</script>";
                die();
            }
        return $this->conn;
    }
}
?>