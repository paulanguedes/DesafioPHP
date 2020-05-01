<?php

function carregaUsuarios(){

    // Ler o arquivo para uma variável string
    $strJson = file_get_contents("../json/usuarios.json");

    // transformar a string em array assoc (json_decode)
    $usuarios = json_decode($strJson, true);

    // retornar o array assoc
    return $usuarios;
}

/**
 * Adiciona um novo usuário no arquivo usuarios.json
 */
function addUsuario($nome, $telefone, $email, $endereço, $senha, $imagem){
    //carrega usuarios usando a função anterior
    $usuarios = carregaUsuarios();
    
    //cria um array associativo $u com os dados passados por parâmetro
    $u = ['nome'=>$nome, 'telefone'=>$telefone, 'email'=>$email, 'endereço'=>$endereço, 'senha'=>$senha, 'imagem'=>$imagem];

    //adiciona $u ao final do array
    $usuarios[]= $u;

    //transforma o array de usuários de volta em string json
    $stringjson = json_encode($usuarios);

    // Verificando se existe algum caractere na stringjson.
    // se tiver, salva no arquivo usuarios.json
    if($stringjson){
        //salva a string json no arquivo usuarios.json
        file_put_contents('../includes/usuarios.json', $stringjson);
    }
    
}
?>