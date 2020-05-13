<?php
session_start();
include('functions.php');

if (!$_SESSION) {
  header('location: index.php');
}

// == variáveis de controle ==
$produto_OK = true;
$descricao_OK = true;
$preco_OK = true;
$foto_OK = true;

// == validação dos dados ==
if($_POST){

  // == variáveis de dados inputados ==
  $produto = $_POST['produto'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];
  $foto = $FILE['foto'];

  if (empty($produto)) {
    $produto_OK = false;
  }
  if (strlen($produto)<3 || strlen($produto)>20) {
    $produto_OK = false;
  }
  if (strlen($descricao)>50) {
    $descricao_OK = false;
  }
  if (!is_numeric($preco)) {
    $preco_OK = false;
  }

  // == upload de foto ==
  if($_FILES){

    $tmpName = $_FILES['foto']['tmp_name'];
    $fileName = uniqid() . '-' . $_FILES['foto']['name'];
    $error = $_FILES['foto']['error'];

    move_uploaded_file($tmpName,'../img/'.$fileName);

    $foto = '../img/'.$fileName;
    }else{
      $foto_OK = false;
    }

  // == salvar no banco de dados ==
  if ($produto_OK && $descricao_OK && $preco_OK && $foto_OK) {
    $id = uniqid();
    novoProduto($id, $produto, $descricao, $preco, $foto);
    header('location: sucessoAddProduto.php');
  }
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

  <section class="createProduto">
    <!-- Título da página -->
    <div class="tituloinput">
        <h5 class="center">adicionando doce</h5>
        <p class="center">adicione seu doce com todo o carinho para fazer parte das nossas memórias</p>
    </div>

    <form class="container" method="POST" enctype="multipart/form-data">
      <!-- Campo do nome -->
      <div class="input-field col s6">
        <i class="material-icons prefix">cake</i>
        <input id="icon_prefix" name="produto" type="text" class="validate" placeholder=" qual o nome do doce">
        <?= ($produto_OK ? '' : '<span class="erro">Precisamos de um bom nome, nem tão curto e nem tão longo</span>'); ?>
        <label for="icon_prefix"></label>
      </div>
      <!-- Campo de descrição -->
      <div class="input-field col s6">
        <i class="material-icons prefix">description</i>
        <input id="icon_prefix" name="descricao" type="text" class="validate" placeholder=" fale um poquinho mais">
        <?= ($descricao_OK ? '' : '<span class="erro">Está muito longa essa história ;D</span>'); ?>
        <label for="icon_prefix"></label>
      </div>
      <!-- Campo de preço -->
      <div class="input-field col s6">
        <i class="material-icons prefix">local_offer</i>
        <input id="icon_prefix" name="preco" type="number" class="validate" placeholder=" preço">
        <?= ($preco_OK ? '' : '<span class="erro">O-Oh! O preço precisa ser um número inteiro.</span>'); ?>
        <label for="icon_prefix"></label>
      </div>
      <!-- Campo de foto -->
      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons">add_a_photo</i></span>
          <input type="file" name="foto">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" name="foto" type="text" placeholder=" mostra uma foto =D">
          <?= ($foto_OK ? '' : '<span class="erro">Queremos uma foto!</span>'); ?>
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

<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>