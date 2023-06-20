<?php
    require "conexao.php";

    class Crud_receita extends Conexao
    {
        public function CriarReceita($titulo, $preparo, $tags, $admin, $dado)
        {
            $hora = new DateTime();

            $hora_sql = $hora->setTimezone(new DateTimeZone('America/Sao_Paulo'))
                            ->format('Y/m/d g:i:s');                 

            $SQL = "INSERT INTO td_receita VALUES(default, '$titulo', '$tags', '$preparo', '$admin', '$dado','$hora_sql', null)";

            $resultado_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');

            if($resultado_sql)
            {
                echo '<script>alert("Dados inseridos com sucesso!")</script>';
            }

            else
            {
                echo '<script>alert("Erro na inserção de dados!")</script>';
            }
        }

        public function DeletarReceita($titulo)
        {
            $SQL = "SELECT receita_id FROM td_receita WHERE titulo = '$titulo'";

            $retorno_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');

            $resultado_sql = $retorno_sql->fetch(PDO::FETCH_ASSOC);

            $where = $resultado_sql["receita_id"];

            $SQL = "DELETE FROM td_receita WHERE receita_id = '$where'";

            $retorno_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');

            if($retorno_sql)
            {
                echo '<script>alert("Dados deletados com sucesso!")</script>';
            }

            else
            {
                echo '<script>alert("Erro na deletação de dados!")</script>';
            }
        }
    }
?>