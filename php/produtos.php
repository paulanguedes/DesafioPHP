<?php
session_start();

include('functions.php');

// == TESTAR SE O USUÁRIO TEM PERMISSÃO DE ACESSO ==
if (!$_SESSION) {
  
  // -- Caso negativo, redireciona para a página de login -- 
  header('location: index.php');
}

$produtos = listaProdutos();

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
        <td class="tablevalue"> <?=$produto['produto']?> </td>
        <td class="tablevalue"> <?=$produto['descricao']?> </td>
        <td class="tablevalue"> R$ <?=number_format($produto['preco'], 2, ',', '.') ?> </td>
        <td class="tablevalue center"><a href="showProduto.php?id=<?=$produto['id']?>" class="botaomais btn-floating btn-small waves-effect waves-light"><form method="get"></form><i class="material-icons">add</i></a> </td>
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

<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>