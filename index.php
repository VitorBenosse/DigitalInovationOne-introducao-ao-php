<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <title>Formulário de incrição</title>
    <meta name="author" content="Vitor Benosse">
    <meta name="description" content="Formulário de inscrição de nadadores">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>

<h1>FORMULÁRIO DE INCRIÇÃO DE COMPETIDORES</h1>

<form action="script.php" method="post">
    <?php
        $mensagemDeSucesso = isset($_SESSION['mensagem_de_sucesso']) ? $_SESSION['mensagem_de_sucesso'] : '';
        if (!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = isset($_SESSION['mensagem_de_erro']) ? $_SESSION['mensagem_de_erro'] : '';
        if (!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <input type="text" name="nome"/></p>
    <p>Sua idade: <input type="text" name="idade"/></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>

</body>

</html>