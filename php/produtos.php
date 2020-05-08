<?php
session_start();

include('functions.php');

$produtos = listaProdutos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
            <li class="icon-name tab col s3"><i class="material-icons">view_module</i>Hover me!</li>
            <li class="icon-name tab col s3 tooltipped" data-position="bottom" data-tooltip="novo produto"><a href="./createProduto.php"><i class="material-icons">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped" data-position="bottom" data-tooltip="novo usuário"><a href="./createUsuario.php"><i class="material-icons">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped" data-position="bottom" data-tooltip="encerrar sessão"><a href="./index.php"><i class="material-icons">face</i></a>Hover me!</li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="listaProdutos">
    <div class="tituloinput">
        <h5 class="center">doces e memórias</h5>
        <p class="center">veja aqui todos os doces adicionados pelos habitantes desse mundo açucarado</p>
    </div>

  <section class="container center">

    <table>
      <tr>
        <th class="tablelable">doce</th>
        <th class="tablelable">sobre</th>
        <th class="tablelable">preço</th>
        <th class="tablelable center">saiba mais</th>
      </tr>
      <tr>
        <?php foreach($produtos as $produto): ?>
        <td class="tablevalue" id="nomeprod"> <?=$produto['produto']?> </td>
        <td class="tablevalue"> <?=$produto['descricao']?> </td>
        <td class="tablevalue"> R$ <?=number_format($produto['preco'], 2, ',', '.') ?> </td>
        <td class="tablevalue center"> <a href="showProduto.php" class="botaomais btn-floating btn-small waves-effect waves-light"><i class="material-icons">add</i></a> </td>
      </tr>
      <?php endforeach;?>
    </table>

  </section>

    

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