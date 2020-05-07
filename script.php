<?php

session_start();

$categorias     = [];
$categorias[]   = 'infantil';
$categorias[]   = 'adolescentes';
$categorias[]   = 'adulto';
$categorias[]   = 'idoso';

$nome           = $_POST["nome"];
$idade          = $_POST["idade"];

if (empty($nome)) {
    $_SESSION['mensagem_de_erro'] = 'Informe um nome';
    header('location: index.php');
    return;
}

if else (strlen($nome) < 3 ) {
    $_SESSION['mensagem_de_erro'] = 'O nome é muito pequeno';
    header('location: index.php');
    return;
}

if else (strlen($nome) > 40) {
    $_SESSION['mensagem_de_erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}

if else (!is_string($nome)) {
    $_SESSION['mensagem_de_erro'] = 'Informe um nome válido';
    header('location: index.php');
    return;
}

if else (!is_numeric($idade)) {
    $_SESSION['mensagem_de_erro'] = 'Informe uma idade válida';
    header('location: index.php');
    return;
}


if ($idade > 6) {

if ($idade >= 6 && $idade <= 12) {
    
    for ($i = 0; $i <= count($categorias); $i ++) {

        if($categorias [$i] == 'infantil')
            $_SESSION['mensagem_de_sucesso'] = "O nadador ".$nome." compete na categoria" .$categorias[$i];
            header('location: index.php');
            return;
        }
    }
else if ($idade >=13 && $idade <= 18) {
    
    for ($i = 0; $i <= count($categorias); $i ++) {

        if($categorias [$i] == 'adolescente')
        $_SESSION['mensagem_de_sucesso'] = "O nadador ".$nome." compete na categoria" .$categorias[$i];
        header('location: index.php');
        return;

        }
    }


else {
    for ($i = 0; $i <= count($categorias); $i ++) {

        if($categorias [$i] == 'adulto')
        $_SESSION['mensagem_de_sucesso'] = "O nadador ".$nome." compete na categoria" .$categorias[$i];
        header('location: index.php');
        return;

        }
    }
}

else {

    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto') {
    $_SESSION['mensagem_de_sucesso'] = "O nadador ".$nome." compete na categoria" .$categorias[$i];
            header('location: index.php');
            return;
        }
    }
}


?>