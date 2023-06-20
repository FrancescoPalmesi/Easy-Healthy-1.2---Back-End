<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php header('Content-type: text/html,charset=utf-8'); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/LOGO_STUDIO_PALMESI-removebg-preview.png" >
    <title>Encontre sua receita</title>
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
            <a href="#" class="active">Quem Somos</a>
            <a href="#">Buscar Receitas</a>
            <a href="#">Área Restrita</a>
            <a href="#">Login or Sing-up</a>
        </div>
    </div>
    <div tabindex="0" class="content" onfocus="closeSidebar()" id="content">
        
    </div>
    <div id="search">
        <div id="position-text">
            <p id="titulo">Encontre a receita ideal</p><p id="destaque">para você!</p>
        </div>
        <div id="position-form">
            <form class="form-wrapper cf">
  	        <input type="text" placeholder="Encontrar receita..." required>
	        <button type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
    <main>
    <form class="form-tags">
    <div class="input-block">
        <label id="label-titulo"for="login-email">Dificuldade</label>
    </div>
    <div class="input-block">
                    <input id="login-email2" type="checkbox" required>
                    <label for="login-email">Baixa</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">Media</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">Alta</label>
                  </div>
                  <div class="input-block">
                  <label id="label-titulo" for="login-email">Preparo</label>
                  </div>
                  <div class="input-block">
                    <input id="login-email2" type="checkbox" required>
                    <label for="login-email">-45min</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">45min-1h30m</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">+1h30m</label>
                  </div>
                  <div class="input-block">
                  <label id="label-titulo" for="login-email">Dieta</label>
                  </div>
                  <div class="input-block">
                    <input id="login-email2" type="checkbox" required>
                    <label for="login-email">Glúten-free</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">Zero-lactose</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">Vegana</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">Vegetariana</label>
                    <input id="checkbox2" type="checkbox" required>
                    <label for="login-email">Ovo-lacto-vegetariana</label>
                  </div>
    </form>
    <div class="container-md ">

<div class="row ">
 
<div class="row mt-4 ">
    <div class="col-md-4 ">
    <div class="card h-100 ">
            <img src="assets/img/background.png" class="card-img-top"    alt="...">
        <div class="card-body">
            <h5 class="card-title text-dark">Card title</h5>
            <p class="card-text text-dark">Some quick example text .</p>
        </div>
            <div class="card-footer">
            <button type="button" class="btn btn-light">Light</button>
            </div>
    </div>

    </div>
    
    <div class="col-md-4">

    <div class="card h-100">
            <img src="assets/img/background.png" class="card-img-top"    alt="...">
        <div class="card-body">
            <h5 class="card-title text-dark">Card title</h5>
            <p class="card-text text-dark">Some quick example text .</p>
        </div>
            <div class="card-footer">
            <small class="text-muted"> <a href= "grid.php">Acesso Aqui</a></small>
            </div>
    </div>
    </div>
    
    <div class="col-md-4">

    <div class="card h-100">
            <img src="assets/img/background.png" class="card-img-top"    alt="...">
        <div class="card-body">
            <h5 class="card-title text-dark">Card title</h5>
            <p class="card-text text-dark">Some quick example text .</p>
        </div>
            <div class="card-footer">
            <small class="text-muted"> <a href= "grid.php">Acesso Aqui</a></small>
            </div>
    </div>
    
    </div>
    

</div>

    </main>
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