<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php header('Content-type: text/html,charset=utf-8'); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="pagina_inicial/assets/css/style.css">
    <link rel="stylesheet" href="pagina_inicial/assets/css/laptopl.css">
    <link rel="stylesheet" href="pagina_inicial/assets/css/laptop.css">
    <link rel="stylesheet" href="pagina_inicial/assets/css/tablet.css">
    <link rel="stylesheet" href="pagina_inicial/assets/css/mobilel.css">
    <link rel="stylesheet" href="pagina_inicial/assets/css/mobilem.css">
    <link rel="stylesheet" href="pagina_inicial/assets/css/mobiles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="pagina_inicial/assets/img/LOGO_STUDIO_PALMESI-removebg-preview.png" >
    <title>Easy Healthy</title>
  </head>
  <body id="body">
    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div class="logo_header">
            <img src="pagina_inicial/assets/img/logo.png"  class="img_logo_header">
        </div>
        <div class="navigation_header" id="navigation_header">
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
            <a href="#" class="active">Quem Somos</a>
            <a href="#">Buscar Receitas</a>
            <a href="#">Área Restrita</a>
            <?php session_start();
                if(isset($_SESSION["nome_usuario"]))
                {
                    echo "<a href=\"#\">". $_SESSION["nome_usuario"] ."</a>";
                }

                else
                {
                    echo "<a href=\"#\">Login or Sing-up</a>";
                }
            ?>
        </div>
    </div>
    <div tabindex="0" class="content" onfocus="closeSidebar()" id="content">
        
    </div>
    <section id="inicial-banner">
        
            <img id="imgprincipal" src="pagina_inicial/assets/img/Pagina_Inicial_1secao.png">
        
    </section>
    <div id="detalhes">
        <div id="detalhe1">
            <img src="pagina_inicial/assets/img/icon1.png" width="50%">
            <p class="txtdetalhe">Receitas de 
            diversos tipos para 
            diversas dietas</p>
        </div>
        <div id="detalhe2">
            <img src="pagina_inicial/assets/img/icon2.png" width="50%">
            <p class="txtdetalhe">Receitas  rapidas
            e simples para
            rotinas aceleradas</p>
        </div>
        <div id="detalhe3">
            <img src="pagina_inicial/assets/img/icon3.png" width="40%">
            <p class="txtdetalhe">Receitas  de baixo
            custo e baixo 
            impacto ambiental</p>
        </div>
        <div id="detalhe4">
            <img src="pagina_inicial/assets/img/icon4.png" width="57%">
            <p class="txtdetalhe">Sistema de busca
            otimizado para 
            melhor experiencia</p>
        </div>
    </div>
    <div id="detalhes02"></div>
    <div class="apresentacao">
        <div id="textosisolados">
        <p id="titulosec2">Quem somos</p>
        <p id="txtsec2">Um website que reúne receitas reutilizadas,<br> 
        valorizando a <a id="txtmodificado"href="">história e a cultura por trás 
        <br>de cada prato. </a >
        <br>
        <br>
        Aqui, você encontrará receitas tradicionais de<br>
        diferentes regiões do mundo, com o objetivo de <br>
        <a id="txtmodificado"href="">preservar as tradições culinárias e promover a 
        <br>sustentabilidade alimentar.</a></p></div>
        <input id="vereceitas" type="button" href="" value="Quero ver receitas">
        <img src="pagina_inicial/assets/img/prato.png" id="prato" >
    </div>
    
    <div id="secao3">
        <p id="titulosec3">Descubra novas<br>
                            receitas e histórias</p>
        <p id="txtsec3">Descubra as <a id="txtmodificado2"href="">tradições culinárias</a> de diversas<br>
         partes do mundo!<br> <br>
            Aqui você encontrará <a id="txtmodificado2"href="">dados históricos sobre<br>
            as origens das mais diversas receitas!</a></p>
    </div>
    <section id="inicial-banner2">
        
        <img id="imgprincipal" src="pagina_inicial/assets/img/Pagina_Inicial_3secao.png">
    
    </section>


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


    <script src="pagina_inicial/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>