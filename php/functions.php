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
  function novoUsuario($id, $nome, $email, $senha, $fotousuario){

    // Carregar a lista de usuarios usando a função anterior
    $usuarios = listaUsuarios();

    // Criar um array associativo com os dados passados por parâmetro
    $arrayUsuarios = ['id'=>$id, 'nome'=>$nome, 'email'=>$email, 'senha'=> password_hash($senha, PASSWORD_DEFAULT), 'fotousuario'=>$fotousuario];

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

  // === FUNÇÃO PARA BUSCAR O USUARIO POR ID ===
  function usuarioID($id){

    // Trazer o array associativo de usuarios
    $usuarios = listaUsuarios();
    
    // Percorrer o array procurando o usuario com o id solicitado
    foreach ($usuarios as $usuario) {
      if ($usuario['id'] == $id) {
        return $usuario;
      }
    }return false;
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
function novoProduto($id, $produto, $descricao, $preco, $foto){
  
  // Carregar a lista de produtos usando a função anterior
  $produtos = listaProdutos();
 
  // Criar um array associativo com os dados inputados por parâmetro
  $arrayProdutos = ['id'=>$id, 'produto'=>$produto, 'descricao'=>$descricao, 'preco'=>$preco, 'foto'=>$foto];

  // Adicionar $arrayProdutos ao final do $produtos
  $produtos[]= $arrayProdutos;

  // Transformar o array de produtos de volta em string
  $stringProdutos = json_encode($produtos);

  // Verificar se existe algum caractere na string criada e, se tiver, salvar no arquivo produtos.json
  if($stringProdutos){

      // Salvar essa string no arquivo produtos.json
      file_put_contents('../json/produtos.json', $stringProdutos);
  }
} 

// === FUNÇÃO PARA BUSCAR O PRODUTO POR ID ===
function produtoID($id){

  // Trazer o array associativo de produtos
  $produtos = listaProdutos();
  
  // Percorrer o array que procura o produto com o id solicitado
  foreach ($produtos as $produto) {
    if ($produto['id'] == $id) {
      return $produto;
    }
  }
  return false;
}

// == FUNÇÃO PARA EDITAR PRODUTOS ==
function editProduto($id){

  // Trazer o array associativo de produtos
  $produtos = listaProdutos();

  // Criar um array associativo com os dados inputados por parâmetro
  $arrayEditado = ['id'=>$id, 'produto'=>$produto, 'descricao'=>$descricao, 'preco'=>$preco, 'foto'=>$foto];

  // Buscar no array o produto que tem esse id
  foreach ($produtos as $produto) {
    if ($produto['id'] == $id) {
      $produto = $arrayEditado;
      $produtos[$id]= $arrayEditado;
    }return $produtos;
  }

  $arrayProdutos = json_decode($produtos);

  // Salvar essa string no arquivo produtos.json
  file_put_contents('../json/produtos.json', $produtos);
}

// FUNÇÃO PARA EXCLUIR PRODUTO
function deletarProduto($id){
    
  $produtos = listaProdutos();

    for ($i = 0; $i <= count($produtos); $i++) {
        if ($produtos[$i]['id'] == $id) {
            unset($produtos[$i]);
        } elseif ($produtos[$i] == $id) {
            unset($produtos[$i]);
        }
    }

    $novoProdutos = json_encode($produtos);
    
    file_put_contents('../json/produtos.json', $novoProdutos);
}
?>