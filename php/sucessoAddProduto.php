<?php
session_start();
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

  <section class="produtoOK">
    <!-- Mensagem de sucesso no cadastro de usuário -->
    <div class="container">
      <h6>Agora seu doce estará sempre em nossas lembranças!</h6>
    </div>
    <!-- Botão encaminha para lista de usuários -->
    <div class="container">
    <a href="produtos.php">Clique aqui para visualizar todos os doces</a>
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