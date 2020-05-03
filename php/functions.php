<?php

// == CRIANDO UMA LISTA COM OS USUÁRIOS == 
function listaUsuarios(){
    // Transformar o arquivo em uma string
    $UsJsonStr = file_get_contents("../includes/usuarios.json");
    // Transformar a string em array associativo
    $usuarios = json_decode($UsJsonStr, true);
    // Retornar o array associativo
    return $usuarios;
  }
  
  // == FUNÇÃO PARA GUARDAR NOVO USUÁRIO NA LISTA == 
  function novoUsuario($nome, $email, $senha, $confirmação, $fotousuario){
    // Carregar a lista de usuarios usando a função anterior
    $usuarios = carregaUsuarios();
    // Criar um array associativo com os dados passados por parâmetro
    $arrayUsuarios = ['nome'=>$nome, 'email'=>$email, 'senha'=>$senha, 'confirmacao'=>$confirmacao, 'fotousuario'=>$fotousuario];
    // Adicionar os dados inputados ao array criado
    $usuarios[]= $arrayUsuarios;
    // Transformar o array de usuários de volta em string
    $stringUsuarios = json_encode($usuarios);
    // Verificar se existe algum caractere na string criada e, se tiver, salvar no arquivo usuarios.json
    if($stringUsuarios){
        // Salvar essa string no arquivo usuarios.json
        file_put_contents('../json/usuarios.json', $stringUsuarios);
    }

?>