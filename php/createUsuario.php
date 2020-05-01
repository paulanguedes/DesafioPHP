<?php

// Includes
include('../includes/functions.php');

// Valores padrões
$name = '';
$email = '';
$password = '';
$confirm = '';

// Variáveis de controle de erro
$nameOk = true;
$emailOK = true;
$passwordOk = true;
$confirmOK = true;

// Testando a $_FILES
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// Verificar se o usuário enviou o formulário
if($_POST){

    // Guardando o valor dado na variável
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];

    // Verificar se $_FILES recebeu algum valor
    if($_FILES){

        // Separando informações úteis do $_FILES
        $tmpName = $_FILES['file']['tmp_name'];
        $fileName = uniqid().'-'.$_FILES['file']['name'];
        $error = $_FILES['file']['error'];

        // Salvar o arquivo numa pasta do meu sistema
        move_uploaded_file($tmpName,'../img/usuarios/'.$fileName);

        // Salvar o nome do arquivo em $imagem
        $file ='../img/usuarios/imgUsuarios/'.$fileName;

      } else {
        $file = null;
      }
    
    // Validando o nome
    if( strlen($_POST['name']) < 5){
        $nameOk = false;
    }

    // Validando o email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailOK = true;
      }else{
        $emailOK = false;
      }

    // Validando senha
    if(strlen($password) < 6){
        $passwordOk = false;
    }

    //Validando confirmação de senha
    if ($password != $confirm) {
      $confirmOk = false;
    }

    // Se tudo estiver ok, salva o usuário e redireciona para um endereço
    if($nomeOk && $emailOk && $senhaOk && $confirmOK){

        // Salvando o usuário novo
        addUsuario($name, $email, $password, $confirm, $file);

        // Redirecionando usuário para a lista de usuários
        header('location: usuarios.php');

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuário</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="home">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img width="100px" src="../img/Logo2.png" alt="Logo do site"></a>
        <div class="nav-icons">
          <ul class="nav-icons-list tabs right hide-on-med-and-down">
            <li class="icon-name tab col s3 tooltipped"><a href="./indexProdutos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="lista de produtos">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="novo produto">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="novo usuário">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./login.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
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

    <form class="container" action="" method="post">
      <!-- Campo do nome -->
      <div class="input-field col s6">
        <i class="material-icons prefix">face</i>
        <input name="name" id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Nome completo</label>
        <?=($nameOk?'':'<span class="erro">Campo obrigatório</span>');?>
      </div>
      <!-- Campo de email -->
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input name="email" id="icon_prefix" type="email" class="validate">
        <label for="icon_prefix">E-mail</label>
        <?=($emailOk?'':'<span class="erro">Campo obrigatório</span>');?>
      </div>
      <!-- Campo de senha -->
      <div class="input-field col s6">
        <i class="material-icons prefix">security</i>
        <input name="password" id="icon_prefix" type="password" class="validate">
        <label for="icon_prefix">Senha</label>
        <?=($passwordOk?'':'<span class="erro">Senha inválida. Deve ter no mínimo 6 caracteres.</span>');?>
      </div>
      <!-- Campo de confirmação de senha -->
      <div class="input-field col s6">
        <i class="material-icons prefix">verified_user</i>
        <input name="confirm" id="icon_prefix" type="password" class="validate">
        <label for="icon_prefix">Confirmação de senha</label>
        <?=($confirmOk?'':'<span class="erro">A confirmação não está igual a senha digitada.</span>');?>
      </div>
      <!-- Campo de foto -->
      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons">camera_front</i></span>
          <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder=" foto do usuário" accept=".jpg,.jpeg,.png,.gif">
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