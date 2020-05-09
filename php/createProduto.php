<?php
session_start();
include('functions.php');

// == GUARDANDO DADOS DIGITADOS EM VARIÁVEIS ==
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$foto = $FILE['foto'];
$id = uniqid(uniqid(rand(), true));

// == CRIANDO VARIÁVEIS DE CONTROLE DE ERRO ==
$produto_OK = true;
$descricao_OK = true;
$preco_OK = true;
$foto_OK = true;

// === VALIDANDO OS CAMPOS == 
if($_POST){
  // -- VALIDANDO NOME DO PRODUTO --
  if (empty($produto)) {
    $produto_OK = false;
  }
  if (strlen($produto)<3 || strlen($produto)>20) {
    $produto_OK = false;
  }
  // -- VALIDANDO PREÇO --
  if (!is_numeric($preco)) {
    $preco_OK = false;
  }
  // -- VALIDANDO FOTO --
  if (empty($foto)) {
    $foto_OK = false;
  }

  if($_FILES){

    // Separar informações úteis da global $_FILES
    $tmpName = $_FILES['foto']['tmp_name'];
    $fileName = uniqid() . '-' . $_FILES['foto']['name'];
    $error = $_FILES['foto']['error'];

    // Salvar o arquivo numa pasta do meu sistema
    move_uploaded_file($tmpName,'../img/'.$fileName);

    // Salvar o nome do arquivo em $foto
    $foto = '../img/'.$fileName;
    }

  // -- SE ESTIVER TUDO VALIDADO, DIRECIONAR A UMA PÁGINA --
  if ($produto_OK && $preco_OK && $foto_OK) {
  // -- SALVANDO O NOVO PRODUTO --
  novoProduto($produto, $descricao, $preco, $foto, $id);
  header('location: ../json/produtos.json');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar produto</title>
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
            <li class="icon-name tab col s3 tooltipped" data-position="bottom" data-tooltip="lista de produtos"><a href="./produtos.php"><i class="material-icons">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3"><i class="material-icons" >library_add</i>Hover me!</li>
            <li class="icon-name tab col s3 tooltipped" data-position="bottom" data-tooltip="novo usuário"><a href="./createUsuario.php"><i class="material-icons">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped" data-position="bottom" data-tooltip="encerrar sessão"><a href="./index.php"><i class="material-icons">face</i></a>Hover me!</li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="createProduto">
    <!-- Título da página -->
    <div class="tituloinput">
        <h5 class="center">adicionando doce</h5>
        <p class="center">adicione aqui o seu doce com todo o carinho e lembre-se de que ele fará parte da memória de alguém</p>
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
        <label for="icon_prefix"></label>
      </div>
      <!-- Campo de preço -->
      <div class="input-field col s6">
        <i class="material-icons prefix">local_offer</i>
        <input id="icon_prefix" name="preco" type="number" class="validate" placeholder=" preço">
        <?= ($preco_OK ? '' : '<span class="erro">O-Oh! O preço precisa ser um número.</span>'); ?>
        <label for="icon_prefix"></label>
      </div>
      <!-- Campo de foto -->
      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons">add_a_photo</i></span>
          <input type="file">
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

<script src="../js/jQuery341.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>