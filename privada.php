<?php

if (isset($_GET['dejameEntrar'])) {

    $dejameEntrar = intval($_GET['dejameEntrar']);

    if ($dejameEntrar === 1 ) {
        echo "Bienvenido";
    } elseif ($dejameEntrar === 0) {
        header('Location: login.php');
        exit();
    } else {
        echo "Valor no valido";
    }
} else {
    echo "Valor dejame entrar no dicho";
}

?>