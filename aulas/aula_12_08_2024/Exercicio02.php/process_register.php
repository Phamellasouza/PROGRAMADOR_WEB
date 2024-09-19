<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = htmlspecialchars($_POST['email']);
    
    $data = "Usuário: $username\n Email: $email\n Senha: $password\n\n";

    file_put_contents('users.txt', $data, FILE_APPEND);
    

    echo "<h1>Registro Completo </h1>";
    echo "<p>Obrigado por se registrar, $username!</P>";
    
} else{
    echo "<p> Por favor, envie o formulário.</p>";

}
?>