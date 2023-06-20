<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php header('Content-type: text/html, charset= utf-8'); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/LOGO_STUDIO_PALMESI-removebg-preview.png" >
    <title>Área Restrita</title>
  </head>
  <body id="body">
    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div class="logo_header">
            <img src="assets/img/logo.png"  class="img_logo_header">
        </div>
        <div class="navigation_header" id="navigation_header">
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
            <a href="#" class="active">Minhas Receitas</a>
            <a href="#">Planos Empresa</a>
            <a href="#">Área Restrita</a>
            <a href="#">Meu Perfil</a>
        </div>
    </div>
    <div tabindex="0" class="content" onfocus="closeSidebar()" id="content">
        
    </div>
    <div id="areatexto" style="text-align: center;">
      <h1 class="lbltil">Minhas Receitas</h1>
      <a href="#btnc"><h1 class="lbltbl" style="color: #05664F;">Ainda não tem receitas? Clique aqui para adicionar!</h1></a>
    </div>
    
    <div id="areaformulario">
    <form>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;"><h1 class="lbltbl">ID da receita</h1></td>
            <td style="width: 65%;"><h1 class="lbltbl">Nome da receita</h1></td>
            <td style="width: 5%;"><button id="btna"><img src="assets/img/pen.png" width="80%" height="auto"></button></td>
            <td style="width: 5%;"><button id="btnb"><img src="assets/img/trash.png" width="80%" height="auto" ></button></td>
        </tr>
        <tr style="border-top: solid 1px rgba(128, 128, 128, 0.5) ;">
            <td style="width: 25%; " class="alttd"></td>
            <td style="width: 75%;"class="alttd" colspan="3"></td>
        </tr>
    </table>
    </form>
    </div>
    <div id="areatexto2" style="text-align: center;">
      <h1 class="lbltil">Adicionar Receitas</h1>
      <button id="btnc"><h1 style="font-size: 50px;margin-top: -8px;color: white;"><strong>+</strong></h1></button>
      
      <h1 class="lbltbl">Clique aqui para <strong style="color: #05664F;">ADICIONAR RECEITAS</strong> 
        e complementar a pagina de sua empresa</h1>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Redes Sociais</h3>
                        <ul>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Sobre nos</h3>
                        <ul>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">Quem Somos</a></li>
                            <li><a href="#">Referencias</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Easy Healthy</h3>
                        <p>Em caso de duvidas ou problemas, entre em contato conosco atraves de nossos canais oficiais para suporte e esclarecimento de duvidas.</p>
                    </div>
                    <div class="col item social"></div>
                </div>
                <p class="copyright">Easy Healthy © 2023</p>
            </div>
        </footer>
    </div>

    <script src="script.js"></script>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>