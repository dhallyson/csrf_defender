<?php
    require __DIR__ . "/functions.php";

    var_dump(
        $_SESSION,
        $_REQUEST
    );

    if($_REQUEST && !csrf_verify($_REQUEST)){
        echo "Bloqueou";
    }else{
        var_dump($_REQUEST);
    }
?>

<style>
    input {
        border-radius: 5px;
        padding: 5px;
        border: none;
        background-color: #ccc;
    }

    button {
        background-color: #08e700;
        border: none;
        border-radius: 10px;
        padding: 5px;
        width: 100px;
    }
</style>

<form method="post" action="./">

    <h3>Cadastro</h3>

    <?= csrf_input(); ?>

    <label>Nome:</label>
    <input type="text" name="nome" value="Dhallyson Santos"><br><br>

    <label>Email:</label>
    <input type="text" name="email" value="dhallyson@gmail.com"><br><br>

    <label>Senha:</label>
    <input type="text" name="senha" value="123"><br><br>

    <button type="submit">Cadastrar</button>

</form>