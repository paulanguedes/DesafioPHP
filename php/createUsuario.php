<?php
session_start();
include('functions.php');

// == TESTAR SE O USUÁRIO TEM PERMISSÃO DE ACESSO ==
if (!$_SESSION) {
  
  // -- Caso negativo, redireciona para a página de login -- 
  header('location: index.php');
}

// == CRIANDO VARIÁVEIS DE CONTROLE DE ERRO ==
$nome_OK = true;
$email_OK = true;
$senha_OK = true;
$confirmacao_OK = true;

// === VALIDANDO OS CAMPOS == 

if($_POST){

  // == GUARDANDO DADOS DIGITADOS EM VARIÁVEIS ==
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmacao = $_POST['confirmacao'];
  $fotousuario = $_FILE['fotousuario'];

  // -- VALIDANDO NOME --  
  if (empty($nome)) {
    $nome_OK = false;
  }
  if (strlen($nome)<3 || strlen($nome)>40) {
    $nome_OK = false;
  }
  if (empty($email)) {
    $email_OK = false;
  }
  // -- VALIDANDO SENHA --
  if (strlen($senha)<6) {
    $senha_OK = false;
  }
  // -- VALIDANDO CONFIRMAÇÃO --
  if ($senha !== $confirmacao) {
    $confirmacao_OK = false;
  }
  
  // -- upload de arquivos --
  if($_FILES){

    $tmpName = $_FILES['fotousuario']['tmp_name'];
    $fileName = uniqid() . '-' . $_FILES['fotousuario']['name'];
    $error = $_FILES['fotousuario']['error'];

    move_uploaded_file($tmpName,'../img/imgUsuarios/'.$fileName);

    $fotousuario = '../img/imgUsuarios/'.$fileName;
    } elseif (!$_FILES) {
      $fotousuario = '../img/imgUsuarios/perfilpadrao.png';
    } else {
      $fotousuario = null;
    }{
      
    }

  // -- SE ESTIVER TUDO VALIDADO, DIRECIONAR A UMA PÁGINA --
  if ($nome_OK && $email_OK && $senha_OK && $confirmacao_OK) {

    // -- CRIAR ID PARA O USUARIO --
    $id = uniqid();

    // -- SALVANDO O NOVO USUÁRIO --
    novoUsuario($id, $nome, $email, $senha, $fotousuario);
    header('location: sucessoAddUsuario.php');
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

  <section class="createUsuario">
    <!-- Título da página -->
    <div class="tituloinput">
        <h5 class="center">novo usuário</h5>
    </div>

    <form class="container" action="" method="POST" enctype="multipart/form-data">
      <!-- Campo do nome -->
      <div class="input-field col s6">
        <i class="material-icons prefix">face</i>
        <input name="nome" id="icon_prefix" type="text" class="validate">
        <?= ($nome_OK ? '' : '<span class="erro">Opa! Não esquece do nome com mais de três letras.</span>'); ?>
        <label for="icon_prefix">nome completo</label>
      </div>
      <!-- Campo de email -->
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input name="email" id="icon_prefix" type="email" class="validate">
        <?= ($email_OK ? '' : '<span class="erro">Precisamos do e-mail. Este será seu login ;)</span>'); ?>
        <label for="icon_prefix">e-mail</label>
      </div>
      <!-- Campo de senha -->
      <div class="input-field col s6">
        <i class="material-icons prefix">security</i>
        <input name="senha" id="icon_prefix" type="password" class="validate">
        <?= ($senha_OK ? '' : '<span class="erro">Ei! A senha deve ter seis caracteres, no mínimo.</span>'); ?>
        <label for="icon_prefix">senha</label>
      </div>
      <!-- Campo de confirmação de senha -->
      <div class="input-field col s6">
        <i class="material-icons prefix">verified_user</i>
        <input name="confirmacao" id="icon_prefix" type="password" class="validate">
        <?= ($confirmacao_OK ? '' : '<span class="erro">Parece que a confirmação não é igual a senha. Verifique!</span>'); ?>
        <label for="icon_prefix">confirmação de senha</label>
      </div>
      <!-- Campo de foto -->
      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons">camera_front</i></span>
          <input type="file" accept=".jpg,.jpeg,.png,.gif" name="fotousuario">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder=" foto do usuário">
        </div>
      </div>

      <!-- Botão de envio do formulário -->
      <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="action">Criar
          <i class="material-icons right">send</i>
        </button>
      </div>

      <!-- Botão para lista de usuários -->
      <div class="center">
        <button class="botaousuarios btn waves-effect waves-light"><a href="usuarios.php">usuários
          <i class="material-icons right">people</i></a>
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