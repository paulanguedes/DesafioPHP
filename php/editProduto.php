<?php
session_start();
include('functions.php');

if (!$_SESSION) {
  header('location: index.php');
}

$id = $_GET['id'];
$produto = produtoID($id);

if ($_POST) {
  $id = $_GET['id'];
  $produto = $_POST['produto'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];
  $foto = $FILE['foto'];

  editProduto($id, $produto, $descricao, $preco, $foto);
  header('location: produtos.php');
}

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

  <section class="editProduto container center">
  
      <div class="card">
        <img class="logoreceita" src="../img/Logo2.png" alt="Logo Fatias de Memória">

      <form action="produtos.php" method="post" enctype="multipart/form-data">
      
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
            <input class="file-path validate" value="<?= $produto['foto'] ?>" type="text">
          </div>
        </div>
        
        <div class="card-image">
          <img src='<?= $produto['foto'] ?>'>
        </div>

        <div class="card-action">
          <button class="btn waves-effect waves-light" type="submit" name="action">editar
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

<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>