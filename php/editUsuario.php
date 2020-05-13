<?php
session_start();
include('functions.php');

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
    <title>Fatias de Memória</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="home">
    <nav>
      <div class="nav-wrapper">
        <a href="home.php" class="brand-logo"><img width="100px" src="../img/Logo2.png" alt="Logo do site"></a>
        <div class="nav-icons">
          <ul class="nav-icons-list tabs right">
            <li><a href="produtos.php">produtos</a></li>
            <li><a href="createProduto.php">criar produto</a></li>
            <li><a href="createUsuario.php">criar usuário</a></li>
            <li><a href="index.php">logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="editUsuario">

    <form action="#" method="post">
      <div class="card">
        <div class="card-stacked">
          <div class="column">
            <img src="<?= $usuario['fotousuario'] ?>">
          </div>
          <div class="card-content column">
            <div class="input-field">
              <input type="text" name="nome" value="<?= $usuario['nome'] ?>" class="validate">
              <label for="">nome completo</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" value="<?= $usuario['email'] ?>" class="input-field validate">
              <label for="">e-mail</label>
            </div>
            <div class="file-field input-field">
              <div class="btn">
                <span>foto</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" name="fotousuario" type="text" value="<?= $usuario['fotousuario'] ?>">
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


<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>