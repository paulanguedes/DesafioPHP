<?php
session_start();
include('functions.php');

// == LOGIN E SENHA DO USUÁRIO ==
// -- Variável de controle
$login_OK = true;

// -- Verificar se o usuário inputou dados na área de login
if ($_POST) {
  
  // -- Buscar um usuário com o e-mail digitado
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $usuarios = listaUsuarios();

  foreach ($usuarios as $usuario) {
    
    // -- Verificar dados digitados com banco de dados
    if ($usuario['email'] == $email) {
      
      if (password_verify($senha, $usuario['senha'])) {
        // -- Iniciar sessão para o usuário
        session_start();

        $_SESSION['nome'] = $usuario['nome'];
          
        // -- Redirecinar o usuário para a parte logada do sistema
        header('location: home.php');
      }
    }
  }$login_OK = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body id="paginalogin">

  <section class="login">

    <form class="container center" method="POST">
      
      <div class="center">
        <h5>login</h5>
      </div>

      <div class="input-field">
        <input id="email" type="email" name="email" class="validate">
        <label for="email">E-mail</label>
      </div>

      <div class="input-field">
        <input id="password" type="password" name="senha" class="validate">
        <label for="password">Senha</label>
      </div>
      <?= ($login_OK ? '' : '<span class="erro">E-mail ou senha inválidos</span>'); ?>

      <!-- botão para logar no sistema -->
      <button class="btn waves-effect waves-light blue" type="submit" name="action">Login
        <i class="material-icons right">send</i>
      </button>

      <!-- botão para entrar sem logar no sistema -->
      <button class="btn waves-effect waves-light blue"><a href="home.php">Home
        <i class="material-icons right">home</i></a>
      </button>

    </form>

  </section>

<script src="../js/jQuery341.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>