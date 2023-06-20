<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html, charset= utf-8'); ?>
    <link rel="icon" type="image/x-icon" href="LOGO_STUDIO_PALMESI-removebg-preview.png" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">Seja bem vindo!</h1>
        <div class="forms">
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login" method="POSt" action="usuario.php">
              <fieldset>
                <legend>Por favor, insira seu email e senha para confirmação do login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" name="mail" type="email" required>
                  <p id="result"></p>
                </div>
                <div class="input-block">
                  <label for="login-password">Senha</label>
                  <input id="login-password" name="senha" type="password" required>
                </div>
              </fieldset>
              <button type="submit" name="logar" class="btn-login">Login</button>
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup" method="POST" action="usuario.php">
              <fieldset>
                <legend>Por favor, insira seu email, senha e nome de usuario para criar conta.</legend>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" name="mail" type="email"  required>
                  <p id="result2"></p>
                </div>
                <div class="input-block">
                  <label for="signup-password">Usuário</label>
                  <input id="signup-password" name="user" type="text" required>
                </div>
                <div class="input-block">
                  <label for="signup-password-confirm">Senha</label>
                  <input id="signup-password-confirm" name="senha" type="password" required>
                </div>
              </fieldset>
              <button type="submit" name="criar" class="btn-signup">Criar conta</button>
            </form>
          </div>
        </div>
      </section>
      <p id="termosdeuso">Ao criar uma conta, você concorda com nossos<br>
        <a id="destaque"href="#">Termos de Uso</a> e <a id="destaque"href="#">Política de Privacidade</a></p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="script.js"></script>
</body>
<!--PHP para cadastros-->
<?php
  if(isset($_POST["criar"]))
  {
    require "../Classes/funcao_usuario.php";

    $inst = new Crud_usuario();

    $user = addslashes(trim($_POST["user"]));

    $senha = md5(trim($_POST["senha"]));

    $email = trim($_POST["mail"]);

    $inst->CriarUsuario($user, $email, $senha);
  }
?>

<!--PHP para login-->
<?php
  if(isset($_POST["logar"]))
  {
    require "../Classes/funcao_usuario.php";
    $inst = new Crud_usuario();

    $email = addslashes(trim($_POST["mail"]));

    $senha = md5(trim($_POST["senha"]));

    $inst->LogarUsuario($email, $senha);
  }
?>
</html>