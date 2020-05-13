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
    <title>Editar produto</title>
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

  <section class="editProduto container center">
  
      <div class="card">
        <img class="logoreceita" src="../img/Logo2.png" alt="Logo Fatias de Memória">

      <form action="" method="post" enctype="multipart/form-data">
      
        <div class="card-content row">
          <div class="input-field col s12">
            <input value="<?= $produto['produto'] ?>" name="produto" type="text" class="validate">
            <label class="active" for="produto">nome</label>
          </div>
        </div>

        <div class="card-content row">
          <div class="input-field col s12">
            <input value="<?= $produto['descricao'] ?>" name="descricao" type="text" class="valnameate">
            <label class="active" for="descricao">sobre o doce</label>
          </div>
        </div>

        <div class="card-content row">
          <div class="input-field col s12">
            <input value="R$ <?= number_format($produto['preco'], 2, ',', '.') ?> " name="preco" type="text" class="validate">
            <label class="active" for="preco">preço</label>
          </div>
        </div>

        <div class="file-field card-content input-field">
          <div class="btn">
            <span>imagem</span>
            <input type="file" name="foto">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        
        <div class="card-image">
          <img src='<?= $produto['foto'] ?>'>
        </div>

        <div class="card-action">
          <a href="#" class="waves-effect waves-light btn">editar</a>
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