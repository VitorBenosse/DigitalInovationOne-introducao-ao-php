<?php

$categorias     = [];
$categorias[]   = 'infantil';
$categorias[]   = 'adolescentes';
$categorias[]   = 'adulto';
$categorias[]   = 'idoso';

$nome           = $_POST["nome"];
$idade          = $_POST["idade"];

if(empty($nome)) {
    echo "Você deve informar um nome";
    return;
}

if(strlen($nome) < 3 ) {
    echo "O nome é muito pequeno";
    return;
}

if(strlen($nome) > 40) {
    echo "O nome é muito extenso";
    return;
}

if(!is_string($nome)) {
    echo "Informe um nome válido";
    return;
}

if(!is_numeric($idade)) {

    echo "Informe uma idade válida";
    return;

}


if ($idade > 6) {

if ($idade >= 6 && $idade <= 12) {
    
    for ($i = 0; $i <= count($categorias); $i ++) {

        if($categorias [$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria infantil";
        }
    }
else if ($idade >=13 && $idade <= 18) {
    
    for ($i = 0; $i <= count($categorias); $i ++) {

        if($categorias [$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria adolescente";

        }
    }


else {
    for ($i = 0; $i <= count($categorias); $i ++) {

        if($categorias [$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria adulto";

        }
    }
}

else {
    echo "O nadador não tem idade para competir";
}

?>