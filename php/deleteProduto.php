<?php
session_start();
include('functions.php');

if (!$_SESSION) {
  header('location: index.php');
}

$id = $_GET['id'];
$produto = produtoID($id);

// if ($_GET) {
//     deletarProduto($id, $produto, $descricao, $preco, $foto);
//     header('location: produtos.php');
// }

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

  <section class="deleteProduto">

    <div class="container center-align">
        <h6>Tem certeza que deseja deletar <?= $produto['produto'] ?>?</h6>
        <a href="showProduto.php?id=<?= $produto['id'] ?>" class="waves-effect btn"><i class="material-icons left">undo</i>voltar</a>
        <a type="submit" name="action" class="waves-effect btn"><i class="material-icons left">delete</i>deletar</a>
    </div>

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