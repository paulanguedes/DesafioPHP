<?php

// == CRIANDO UMA LISTA COM OS USUÁRIOS == 
function listaUsuarios(){
  
  $UsJsonStr = file_get_contents("../json/usuarios.json");
  
  $usuarios = json_decode($UsJsonStr, true);
  
  return $usuarios;
}
  
// == FUNÇÃO PARA GUARDAR NOVO USUÁRIO NA LISTA == 
function novoUsuario($id, $nome, $email, $senha, $fotousuario){

  $usuarios = listaUsuarios();

  $arrayUsuarios = ['id'=>$id, 'nome'=>$nome, 'email'=>$email, 'senha'=> password_hash($senha, PASSWORD_DEFAULT), 'fotousuario'=>$fotousuario];

  $usuarios[]= $arrayUsuarios;

  $stringUsuarios = json_encode($usuarios);

  if($stringUsuarios){
    file_put_contents('../json/usuarios.json', $stringUsuarios);
  }
}

// === FUNÇÃO PARA BUSCAR O USUARIO POR ID ===
function usuarioID($id){

  $usuarios = listaUsuarios();
  
  foreach ($usuarios as $usuario) {
    if ($usuario["id"] == $id) {
      return $usuario;
    }
  }return false;
}


// === FUNÇÃO PARA DELETAR O USUÁRIO ===
function deleteUsuario($id){
  
  $usuarios = listaUsuarios();
  $usuarioExcluido = usuarioID($id);

  foreach ($usuarios as $usuario) {
    if ($usuario["id"] == $usuarioExcluido) {
      unset($usuarioExcluido);
    }return $usuários;
  }
  
  $novoUsuarios = json_encode($usuarios);
  file_put_contents('../json/usuarios.json', $novoUsuarios);
}


// == CRIANDO UMA LISTA DE PRODUTOS == 
function listaProdutos(){
  
  $PrdJsonStr = file_get_contents("../json/produtos.json");

  $produtos = json_decode($PrdJsonStr, true);

  return $produtos;
}


// == FUNÇÃO PARA GUARDAR NOVO PRODUTO NA LISTA == 
function novoProduto($id, $produto, $descricao, $preco, $foto){
  
  $produtos = listaProdutos();
 
  $arrayProdutos = ['id'=>$id, 'produto'=>$produto, 'descricao'=>$descricao, 'preco'=>$preco, 'foto'=>$foto];

  $produtos[]= $arrayProdutos;

  $stringProdutos = json_encode($produtos);

  if($stringProdutos){
    file_put_contents('../json/produtos.json', $stringProdutos);
  }
} 


// === FUNÇÃO PARA BUSCAR O PRODUTO POR ID ===
function produtoID($id){

  $produtos = listaProdutos();

  foreach ($produtos as $produto) {
    if ($produto['id'] == $id) {
      return $produto;
    }
  }
  return false;
}

// == FUNÇÃO PARA EDITAR PRODUTOS ==
function editProduto($id){

  $produtos = listaProdutos();

  $arrayEditado = ['produto'=>$produto, 'descricao'=>$descricao, 'preco'=>$preco, 'foto'=>$foto];

  foreach ($produtos as $produto) {
    if ($produto['id'] == $id) {
      $produto = $arrayEditado;
      $produtos[$id] = $arrayEditado;
    }return $produtos;
  }
  $arrayProdutos = json_decode($produtos);

  file_put_contents('../json/produtos.json', $arrayProdutos);
}

// FUNÇÃO PARA EXCLUIR PRODUTO
function deletarProduto($id){
    
  $produtos = listaProdutos();

  foreach ($produtos as $produto) {
    if ($produto["id"] == $id) {
      unset($produto);
    }
  }
  $novoProdutos = json_encode($produtos);
  file_put_contents('../json/produtos.json', $novoProdutos);
}

?>