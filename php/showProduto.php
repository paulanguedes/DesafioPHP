<?php
session_start();
include('functions.php');

// == TESTAR SE O USUÁRIO TEM PERMISSÃO DE ACESSO ==
if (!$_SESSION) {
  header('location: index.php');
}

//Capturar o id do produto solicitado
$id = $_GET['id'];

// Carregar as informações do produto que tem o id
$produto = produtoID($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
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
          <ul class="nav-icons-list tabs right hide-on-med-and-down">
            <li class="icon-name tab col s3 tooltipped"><a href="produtos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="lista de produtos">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="novo produto">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="novo usuário">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="index.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="showProduto container center">
  
      <div class="card col s12">
        <img class="logoreceita" src="../img/Logo2.png" alt="Logo Fatias de Memória">
        <div class="card-title">
          <span class="card-title"> <?= $produto['produto'] ?> </span>
        </div>
        <div class="card-content">
          <p> <?= $produto['descricao'] ?> </p>
          <p>R$ <?= number_format($produto['preco'], 2, ',', '.') ?> </p>
        </div>
        <div class="card-image">
          <img src=' <?= $produto['foto'] ?> '>
        </div>
        <div class="card-action">
          <a href="editProduto.php?id=<?= $produto['id'] ?>">editar</a>
          <a href="#">deletar</a>
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

<script src="../js/jQuery341.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>