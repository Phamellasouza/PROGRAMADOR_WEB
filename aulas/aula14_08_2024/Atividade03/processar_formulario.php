<?php
//caminho do arquivo JSON
$arquivo_json ='usuarios.json';

//Verifica se o formulário foi enviado
if($_SERVER ['REQUEST_METHOD']==='POST') {
    //Recebe os dados  do formulário
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Cria um array associativo com os dados do usuario 
    $usuario = [
        'codigo' => $codigo,
        'nome' => $nome,
    ]
}