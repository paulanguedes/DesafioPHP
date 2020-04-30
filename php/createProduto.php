<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="home">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img width="100px" src="../img/Logo2.png" alt="Logo do site"></a>
        <div class="nav-icons">
          <ul class="nav-icons-list tabs right hide-on-med-and-down">
            <li class="icon-name tab col s3 tooltipped"><a href="./indexProdutos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">view_module</i></a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">library_add</i></a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">person_add</i></a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./login.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">face</i></a></li>
          </ul>
        </div>
      </div>
  </nav>

  <section class="createProduto">
    <!-- Título da página -->
    <div class="tituloinput">
        <h5 class="center">novo produto</h5>
    </div>

    <form class="container">
      <!-- Campo do nome -->
      <div class="input-field col s6">
        <i class="material-icons prefix">cake</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">produto</label>
      </div>
      <!-- Campo de descrição -->
      <div class="input-field col s6">
        <i class="material-icons prefix">description</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">descrição</label>
      </div>
      <!-- Campo de preço -->
      <div class="input-field col s6">
        <i class="material-icons prefix">local_offer</i>
        <input id="icon_prefix" type="number" class="validate">
        <label for="icon_prefix">preço</label>
      </div>
      <!-- Campo de foto -->
      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons">add_a_photo</i></span>
          <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder=" adicione fotos do produto">
        </div>
      </div>
      <!-- Botão de envio do formulário -->
      <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="action">Criar
          <i class="material-icons right">send</i>
        </button>
      </div>
      


    </form>

  </section>
  
<footer class="page-footer">
  <div class="container">
    <div class="socialtitle">
      <h5>Siga-nos nas redes sociais</h5>
    </div>
    <div class="sociallinks">
      <ul>
        <li><a href="#!">Facebook</a></li>
        <li><a href="#!">Instagram</a></li>
        <li><a href="#!">Pinterest</a></li>
        <li><a href="#!">Twitter</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">&copy; 2020 Copyright Text</div>
  </div>
</footer>

<script src="../js/jQuery341.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>