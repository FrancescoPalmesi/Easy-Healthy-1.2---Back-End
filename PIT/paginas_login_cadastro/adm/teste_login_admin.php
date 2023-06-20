<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php header('Content-type: text/html, charset= utf-8'); session_start();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área restrita</title>
</head>
<body>
    <h1>Inserir receita</h1><br>
    <form action="teste_login_admin" method="POST">
        <label for="titulo">titulo</label><br>
        <input type="text" name="titulo" required><br>
        <label for="tags">tags(separe com ",")</label><br>
        <input type="text" name="tags" required><br>
        <label for="preparo">preparo</label><br>
        <input type="text" name="preparo" required><br>
        <label for="dado">dado histórico</label><br>
        <input type="text" name="dado" required><br>
        <input type="submit" name="criar">
    </form>
    <h1>Deletar receita</h1><br>
    <form action="teste_login_admin" method="POST">
        <label for="titulo">titulo</label><br>
        <input type="text" name="titulo" required><br>
        <input type="submit" name="deletar">
    </form>
</body>
<!--PHP para criar-->
<?php
  require "../Classes/funcao_receita.php";
  $inst = new Crud_receita();

  if(isset($_POST["criar"]))
  {
    $titulo = addslashes(trim($_POST["titulo"]));

    $tags = trim($_POST["tags"]);

    $preparo = trim($_POST["preparo"]);

    $admin = $_SESSION["admin_id"];

    $dado = trim($_POST["dado"]);

    $inst->CriarReceita($titulo, $tags, $preparo, $admin, $dado);

  }
?>
<!--PHP para deletar-->
<?php
  if(isset($_POST["deletar"]))
  {
    $titulo = addslashes(trim($_POST["titulo"]));

    $inst->DeletarReceita($titulo);
  }
?>
</html>