<?php 

/**
 * Considerando a frase abaixo escreva enm script PHP para:
 * A frase :"Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços."
 * a)Transformar todas as letras para maiúsculas (função strtoupper);
 * b)Transformar todas as letras para minúsculas (função strtolower);
 * c))Somentea primeira letra maiúscula (função ucfirst);
 * 
 */
$frase = "Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços.";

echo '<hr>';
echo 'LETRA A:<br>';
echo mb_strtoupper($frase);
echo '<hr>';

echo '<hr>';
echo 'LETRA B: <br>';
echo mb_strtolower($frase);
echo '<hr>';

echo '<hr>';
echo 'LETRA C: <br>';
echo ucfirst($frase);
echo '<hr>';