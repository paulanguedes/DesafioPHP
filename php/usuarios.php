<?php
session_start();
include('functions.php');

// == TESTAR SE O USUÁRIO TEM PERMISSÃO DE ACESSO ==
if (!$_SESSION) {
  
    // -- Caso negativo, redireciona para a página de login -- 
    header('location: index.php');
  }
  
// == CHAMANDO A FUNÇÃO PARA LISTAR OS USUÁRIOS ==
$usuarios = listaUsuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="home">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img width="100px" src="../img/Logo2.png" alt="Logo do site"></a>
        <div class="nav-icons">
          <ul class="nav-icons-list tabs right hide-on-med-and-down">
            <li class="icon-name tab col s3 tooltipped"><a href="./produtos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="doces">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar doce">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar usuário">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./index.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="usuarios">

  <div class="tituloinput">
        <h5 class="center">membros</h5>
    </div>

  <section class="container center">

    <table>
      <tr>
        <th class="tablelable">nome</th>
        <th class="tablelable">e-mail</th>
        <th class="tablelable">foto</th>
        <th class="tablelable center">editar</th>
        <th class="tablelable center">excluir</th>
      </tr>
      <tr>
        <?php foreach($usuarios as $usuario): ?>
        <td class="tablevalue"> <?=$usuario['nome']?> </td>
        <td class="tablevalue"> <?=$usuario['email']?> </td>
        <td class="tablevalue center"> <img src="<?=$usuario['fotousuario']?>" alt="Foto <?=$usuario['nome']?>"> </td>
        <td class="tablevalue center"><a href='editUsuario.php?id=<?=$usuario['nome']?>' class="botaoeditar btn-floating btn-small waves-effect waves-light"><i class="material-icons">edit</i></a> </td>
        <td class="tablevalue center"><a class="botaodeletar btn-floating btn-small waves-effect waves-light"><i class="material-icons">remove</i></a> </td>
      </tr>
      <?php endforeach;?>
    </table>

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