<?php
session_start();
include('functions.php');

if (!$_SESSION) {
  header('location: index.php');
}

$id = $_GET['id'];
$produto = produtoID($id);

if ($_GET) {
    # code...
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar produto</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="home">
    <nav>
      <div class="nav-wrapper">
        <a href="hoome.php" class="brand-logo"><img width="100px" src="../img/Logo2.png" alt="Logo do site"></a>
        <div class="nav-icons">
          <ul class="nav-icons-list tabs right hide-on-med-and-down">
            <li class="icon-name tab col s3"><a href="produtos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="doces">view_module</i></a></li>
            <li class="icon-name tab col s3"><a href="createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar doce">library_add</i></a></li>
            <li class="icon-name tab col s3"><a href="createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar usuário">person_add</i></a></li>
            <li class="icon-name tab col s3"><a href="index.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="deleteProduto">

    <div class="container center-align">

    <h6>Tem certeza que deseja deletar <?= $produto['produto'] ?>?</h6>

    <a href="showProduto.php?id=<?= $produto['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">undo</i>voltar</a>
    <a type="submit" name="action" class="waves-effect waves-light btn"><i class="material-icons left">delete</i>deletar</a>
      
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