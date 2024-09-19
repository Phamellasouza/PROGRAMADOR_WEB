<?php

/**
 * Considerando a variável superglobal $_SERVER, faça um script que:
 * a) Demonstre todas as informações do servidor;
 * b) Demonstre somente o IP;
 * c)Demonstre o nome do arquivo atual;
 * d)Demonstre o IP do servidor e o nome do arquivo concatenados formando a URL.
 */


 echo 'LETRA A: <br>';
 echo 'Informações do Servidor:<br>';
 echo '<pre>' . print_r($_SERVER , true) . '</pre>';
 echo '<hr>';

 echo 'LETRA B: <br>';
 echo 'Ip do servidor: '. $_SERVER["HTTP_HOST"];
 echo '<hr>';

 echo 'LETRA C: <br> Nome arquivo atual: ' . $_SERVER["SCRIPT_NAME"];
  echo '<hr>';

echo 'LETRA D:<br>';
echo 'url  servidor: ' . $_SERVER["HTTP_HOST"] . $_SERVER["SCRIPT_NAME"];
echo '<hr>';


