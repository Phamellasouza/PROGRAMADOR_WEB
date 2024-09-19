
//Demonstrar como o PHP continua a execução do script mesmo que o arquivo incluido não seja encontrado
Crie um arquivo error_demo.php com o seguinte conteúdo
/
<hr>


<?php include 'missing_file.php'; ?>
<div>
    <h2> Teste de Erro</h2>
    <p> Este é um teste para ver como o PHP lida com arquivos ausentes.</p>
</div>