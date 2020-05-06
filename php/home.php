<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            <li class="icon-name tab col s3 tooltipped"><a href="./indexProdutos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="doces">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar doce">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="adicionar usuário">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./index.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
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


<script src="../js/materialize.min.js"></script>
<script src="../js/index.js"></script>
</body>
</html>