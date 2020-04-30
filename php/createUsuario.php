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

  <section class="createUsuario">
    <!-- Título da página -->
    <div class="tituloinput">
        <h5 class="center">novo usuário</h5>
    </div>

    <form class="container">
      <!-- Campo do nome -->
      <div class="input-field col s6">
        <i class="material-icons prefix">face</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Nome completo*</label>
      </div>
      <!-- Campo de email -->
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input id="icon_prefix" type="email" class="validate">
        <label for="icon_prefix">E-mail*</label>
      </div>
      <!-- Campo de senha -->
      <div class="input-field col s6">
        <i class="material-icons prefix">security</i>
        <input id="icon_prefix" type="password" class="validate">
        <label for="icon_prefix">Senha</label>
      </div>
      <!-- Campo de confirmação de senha -->
      <div class="input-field col s6">
        <i class="material-icons prefix">verified_user</i>
        <input id="icon_prefix" type="password" class="validate">
        <label for="icon_prefix">Confirmação de senha</label>
      </div>
      <!-- Campo de foto -->
      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons">camera_front</i></span>
          <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder=" foto do usuário">
        </div>
      </div>
      <!-- Aviso de campo obrigatório -->
      <div class="p-campo-obrg">
        <p>* Campos obrigatórios</p>
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