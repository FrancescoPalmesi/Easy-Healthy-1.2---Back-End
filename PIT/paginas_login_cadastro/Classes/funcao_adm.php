<?php
require "conexao.php";

    class Crud_adm extends Conexao
    {
        public function LogarAdm($admin, $senha)
        {

            $SQL = "SELECT * FROM td_admin WHERE nome = '$admin'";

            $resultado_sql = $this->conn->query($SQL) or die('<script>alert("Erro no banco de dados!")</script>');

            $fetch_sql = $resultado_sql->fetch(PDO::FETCH_ASSOC);

            if(count($fetch_sql) != 0)
            {
                if($senha == $fetch_sql["senha"])
                {
                    session_start();

                    $_SESSION["nome_usuario"] = $fetch_sql["nome"];
                    $_SESSION["dt_criacao"] = $fetch_sql["data_criacao"];
                    $_SESSION["admin_id"] = $fetch_sql["admin_id"];

                    $hora = new DateTime();

                    $hora_sql = $hora->setTimezone(new DateTimeZone('America/Sao_Paulo'))
                                    ->format('Y/m/d h:m:s');

                    $SQL = "UPDATE td_admin set data_ult_login = '$hora_sql' WHERE admin_id = ". $fetch_sql["admin_id"] ."";

                    $update_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');
                    
                    header("Location: teste_login_admin.php");
                    
                    exit;
                }

                else
                {
                    echo'<script>alert("Senha inválida")</script>';
                }
            }

            else
            {
                echo'<script>alert("Usuário inexistente")</script>';
            }
        }

        public function CriarAdm($admin, $senha, $email, $hora_sql)
        {
            $SQL = "INSERT INTO td_admin VALUES(default, '$admin', '$senha', '$email','$hora_sql', null)";

            $retorno_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');

            if($retorno_sql)
            {
                echo '<script>alert("Dados inseridos com sucesso!")</script>';
            }

            else
            {
                echo '<script>alert("Erro na inserção de dados!")</script>';
            }
        }
    }
?>