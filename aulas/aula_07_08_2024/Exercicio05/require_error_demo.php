
//Demonstrar como o PHP para a execução do script se oo arquivo incluido não for encontrado
<br>
Crie um arquivo require_error_demo.php com o seguinte conteúdo
/
<hr>


<?php require 'missing_file.php'; ?>

<div>
    <h2> Teste de Erro com Require </h2>
    <p> Você não deve ver esta mensagem porwque o arquivo requerido não existe .</p>
</div>
