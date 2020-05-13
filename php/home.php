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

  <section class="principal">

    <div class="container center-align">

      <h5><?= ($_SESSION ? 'Oi, '.$_SESSION['nome'].'!' : 'Olá!') ?>  </h5>
      <p>Entrem no nosso mundo todo azul! <br>
      É agradável, porém frio e distante. <br>
      E para alguém em busca de novas aventuras, é um ambiente bastante tedioso. <br>
      A Sala de Memórias, onde trabalhamos, também é toda azul. <br>
      Tem prateleiras que armazenamos as receitas dos nossos doces. <br>
      Você pode achar que isso não tem sentido, que são coisas sem importância. <br>
      Mas se ver de perto essas receitas, descobre que elas guardam as memórias humanas. <br>
      Comece a visitar uma a uma e descubra vários mundos com novas cores e emoções. <br>
      Conforme você visita as memórias, descobre muito sobre si em uma fatia de memória de outras pessoas. <br>
      Você começará a se transformar, e aos poucos essa transformação ficaá mais contida. <br>
      As mudanças ficarão visíveis você ganhará asas para voar para novas aventuras! </p>
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

<script>
  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
</script>
<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>