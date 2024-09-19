//Crie uma página HTML que inclua cabeçalho e rodape usando include e require
1 use os arquivo header.php e footer.php criados anteriormente.
2 crie um arquivo chamado contact.php e inclua header.php e footer.php
/
<hr>


<?php include 'header.php'; ?>

<div>
    <h2> Contato</h2>
    <form>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email"id="email" name="email"><br>
        <input type="submit" value="Enviar">
    </form>
</div>
<?php require 'footer.php'; ?>