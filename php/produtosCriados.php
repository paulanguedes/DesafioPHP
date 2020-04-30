<?php 

//array(1) { 
    //["fotoproduto"]=> array(5) { 
        //["name"]=> string(21) "docePalhaItaliana.jpg" 
        //["type"]=> string(10) "image/jpeg" 
        //["tmp_name"]=> string(24) "C:\xampp\tmp\php7C73.tmp" 
        //["error"]=> int(0) ["size"]=> int(170742) } } 

//Função para salvar arquivos enviados através de um formulário
$extensoesImagem = ['image/jpeg','image/jpg','image/png','image/gif'];

if ($_FILES['fotoproduto']['error'] == 0) {
    if (array_search($_FILES['fotoproduto']['type'], $extensoesImagem) === false) {
        echo "Tipo de arquivo inválido";
        exit;
    }
    if (move_uploaded_file($_FILES['fotoproduto']['tmp_name'], '../img/'.$_FILES['fotoproduto']['name'])) {
        echo "Arquivo salvo com sucesso";
    }else {
        echo "Erro na hora de salvar o arquivo";
    }
}else {
    echo "Erro no envio do arquivo";
}

?>