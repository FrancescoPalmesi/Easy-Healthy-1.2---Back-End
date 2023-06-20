<?php
    require "conexao.php";

    class Crud_usuario extends Conexao
    {
        public function LogarUsuario($email, $senha)
        {
            $SQL = "SELECT * FROM td_user WHERE email = '$email'";

            $resultado_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');

            $fetch_sql = $resultado_sql->fetch(PDO::FETCH_ASSOC);

            if(count($fetch_sql) != 0)
            {
                if($senha == $fetch_sql["senha"])
                {
                    session_start();
                    $_SESSION["nome_usuario"] = $fetch_sql["nome"];
                    $_SESSION["dt_criacao"] = $fetch_sql["data_criacao"];

                    $hora = new DateTime();

                    $hora_sql = $hora->setTimezone(new DateTimeZone('America/Sao_Paulo'))
                                    ->format('Y/m/d g:i:s');

                    $SQL = "UPDATE td_user set data_ult_login = '$hora_sql' WHERE user_id = ". $fetch_sql["user_id"] ."";

                    $update_sql = $this->conn->query($SQL) or die('echo\'<script>alert("Erro no banco de dados!")</script>\'');
                    
                    header("Location: ../../index.php");
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

        public function CriarUsuario($user, $senha, $email)
        {
            $hora = new DateTime();

            $hora_sql = $hora->setTimezone(new DateTimeZone('America/Sao_Paulo'))
                            ->format('Y/m/d g:i:s');                 

            $SQL = "INSERT INTO td_user VALUES(default, '$user', '$email', '$senha','$hora_sql', null)";

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
        
    }
?>