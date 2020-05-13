<?php
session_start();
include('functons.php');

// == ACESSO SOMENTE A USUARIO LOGADO ==
if (!$_SESSION) {
  header('location: index.php');
}

$id = $_GET['id'];
$usuario = usuarioID($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="home">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img width="100px" src="../img/Logo2.png" alt="Logo do site"></a>
        <div class="nav-icons">
          <ul class="nav-icons-list tabs right hide-on-med-and-down">
            <li class="icon-name tab col s3 tooltipped"><a href="produtos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="doces">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar doce">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar usuário">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="index.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="editUsuario">

    <div class="card">
      <div class="card-stacked">
        <div class="column">
          <img src="../img/imgUsuarios/IMG_20181120_173028192.jpg">
        </div>
        <div class="card-content column">
          <div class="input-field">
            <input type="text" value="Paula Guedes" class="validate">
            <label for="">nome completo</label>
          </div>
          <div class="input-field">
            <input type="email" value="paulanguedes@gmail.com" class="input-field validate">
            <label for="">e-mail</label>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>foto</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        <div class="card-action">
          <button class="btn waves-effect waves-light" type="submit" name="action">editar
            <i class="material-icons right">send</i>
          </button>
        </div>
        <div class="card-image" >
          <img src="../img/editarusuario.png">
        </div>
      </div>
    </div>

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


<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>