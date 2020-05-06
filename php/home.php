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
            <li class="icon-name tab col s3 tooltipped"><a href="./indexProdutos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="lista de produtos">view_module</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="novo produto">library_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="novo usuário">person_add</i>Hover me!</a></li>
            <li class="icon-name tab col s3 tooltipped"><a href="./login.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="encerrar sessão">face</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section class="principal">

    <div class="container center-align">
      <h5>nossa história</h5>
      <p>O mundo em que Dulce vive é todo azul. É agradável, porém frio e distante. Para uma fada sedenta por novas aventuras, é um ambiente bastante tedioso. A Sala de Memórias, onde ela trabalha, também é toda azul, possui prateleiras enormes quase sem fim que armazenam as memórias sobre comida em utensílios de cozinha, e Dulce achava que aquilo não tinha sentido, que eram muitas tralhas velhas e sem importância.</p>
      <p>Dulce acaba caindo dentro de um dos utensílios e descobre o que aqueles objetos realmente guardavam, as memórias humanas. Ela começa a visitar uma a uma e descobre vários mundos com novas cores e emoções.</p>
      <p>Conforme Dulce visita as memórias, ela descobre muito sobre si mesma vivendo uma fatia de memória de outras pessoas. Ela começa a se transformar, e aos poucos essa transformação não consegue ficar contida somente dentro da fadinha, as mudanças ficam visíveis, e ela ganha asas para voar para novas aventuras! </p>
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