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
<body class="home">

  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img width="100px" src="../img/LogoBranco.png" alt="Logo do site"></a>
      <div class="nav-icons">
        <ul class="nav-icons-list tabs right hide-on-med-and-down">
          <li class="icon-name tab col s3 tooltipped"><a href="./indexProdutos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">search</i></a></li>
          <li class="icon-name tab col s3 tooltipped"><a href="./indexProdutos.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">view_module</i></a></li>
          <li class="icon-name tab col s3 tooltipped"><a href="./createProduto.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">library_add</i></a></li>
          <li class="icon-name tab col s3 tooltipped"><a href="./createUsuario.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="I am a tooltip">person_add</i></a></li>
        </ul>
      </div>
    </div>
  </nav>

<section class="createProduto">

  <div class="column">

    <form class="container" method="get" action="./produtosCriados.php" enctype="multipart/form-data">

      <h5 class="tituloform center-align">inserir produto</h5>

      <div class="input-field">
        <input id="nome_produto" type="text" class="validate">
        <label for="nome_produto">nome do produto</label>
      </div>

      <div class="input-field">
        <input id="descricao_produto" type="text" class="validate" required>
        <label for="descricao_produto">descrição do produto</label>
      </div>

      <div class="input-field">
        <input id="preco" type="number" class="validate">
        <label for="preco">preço (R$)</label>
      </div>

      <div class="input-field col s12">
        <select>
          <option value="" disabled selected>Escolha a unidade de medida do produto</option>
          <option value="1">gramas</option>
          <option value="2">unidade</option>
          <option value="3">inteiro</option>
          <option value="4">pedaço</option>
          <option value="5">pacote</option>
          <option value="6">cesta</option>
          <option value="7">kit</option>
        </select>
        <label>unidade de medida</label>
      </div>

      <div class="file-field input-field">
        <div class="btn">
          <span><i class="material-icons grey-text text-darken-2 tiny">add_a_photo</i></span>
          <input type="file" name="fotoproduto" value="">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" required>
        </div>
      </div>

      <button class="botaoenviar btn waves-effect waves-light" type="submit" name="action">Criar
        <i class="material-icons grey-text text-darken-2 right">send</i>
      </button>

    </form>

  </div>

</section>

  <script src="../js/jQuery341.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/index.js"></script>
</body>
</html>