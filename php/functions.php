<?php

// == CRIANDO UMA LISTA COM OS USUÁRIOS == 
function listaUsuarios(){
    // Transformar o arquivo em uma string
    $UsJsonStr = file_get_contents("../json/usuarios.json");
    // Transformar a string em array associativo
    $usuarios = json_decode($UsJsonStr, true);
    // Retornar o array associativo
    return $usuarios;
  }
  
  // == FUNÇÃO PARA GUARDAR NOVO USUÁRIO NA LISTA == 
  function novoUsuario($nome, $email, $senha, $fotousuario){

    // Carregar a lista de usuarios usando a função anterior
    $usuarios = listaUsuarios();

    // Criar um array associativo com os dados passados por parâmetro
    $arrayUsuarios = ['nome'=>$nome, 'email'=>$email, 'senha'=>$senha, 'fotousuario'=>$fotousuario];

    // Adicionar os dados inputados ao array criado
    $usuarios[]= $arrayUsuarios;

    // Transformar o array de usuários de volta em string
    $stringUsuarios = json_encode($usuarios);

    // Verificar se existe algum caractere na string criada e, se tiver, salvar no arquivo usuarios.json
    if($stringUsuarios){

        // Salvar essa string no arquivo usuarios.json
        file_put_contents('../json/usuarios.json', $stringUsuarios);
    }
  }

  // == CRIANDO UMA LISTA DE PRODUTOS == 
function listaProdutos(){

  // Transformar o arquivo em uma string
  $PrdJsonStr = file_get_contents("../json/produtos.json");

  // Transformar a string em array associativo
  $produtos = json_decode($PrdJsonStr, true);

  // Retornar o array associativo
  return $produtos;
}

// == FUNÇÃO PARA GUARDAR NOVO PRODUTO NA LISTA == 
function novoProduto($produto, $descricao, $preco, $foto){

  // Carregar a lista de produtos usando a função anterior
  $produtos = listaProdutos();

  // Criar um array associativo com os dados passados por parâmetro
  $arrayProdutos = ['produto'=>$produto, 'descricao'=>$descricao, 'preco'=>$preco, 'foto'=>$foto];

  // Adicionar os dados inputados ao array criado
  $produtos[]= $arrayProdutos;

  // Transformar o array de produtos de volta em string
  $stringProdutos = json_encode($produtos);

  // Verificar se existe algum caractere na string criada e, se tiver, salvar no arquivo produtos.json
  if($stringUsuarios){

      // Salvar essa string no arquivo produtos.json
      file_put_contents('../json/produtos.json', $stringProdutos);
  }
}

function showProduto($id){
  
  // Trazer o array de produtos para dentro da função
  $produtos = listaProdutos();

  // Percorrer o array procurando o produto que corresponde ao que o usuário quer ver
  foreach ($produtos as $produto) {
    if ($produto['produto'] == $id) {
      return $produto;
    }
  }
  // Se não encontrar, retorna falso
  return false;
}
?>