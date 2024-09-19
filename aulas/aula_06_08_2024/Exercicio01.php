<?php

/** 
 * Realize a definição das constantes e seus valores e faça sua impressão
 * MAIOR_IDADE:18;
 * PERC_ICMS:25;
 * TEXTO_BOAS_VINDAS: Seja Bem vindo ao nosso site.
 */

 define('MAIOR_IDADE',18);
 echo '<br>';
 echo 'Minha idade é: ' . MAIOR_IDADE;
 echo '<br>';
 
 /** echo utiliza quando quer que a informa */

 define('PERC_ICMS',25);
 echo '<br>';
 echo 'O percentual de ICMS da empresa é: '.PERC_ICMS . "%";
 echo '<br>';

 define('TEXTO_BOAS_VINDAS', 'Seja bem-vindo ao nosso site s2');
 echo '<br>';
 echo 'Saudação: '.TEXTO_BOAS_VINDAS;
 echo '<br>';
