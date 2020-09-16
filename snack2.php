<!-- Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$mail = $_GET['mail'];
$nome = $_GET['nome'];
$eta = $_GET['eta'];


if( empty($mail) && empty($mail) && empy($eta)){
    if((strlen($name) > 3) && (strpos($mail,'@') !== false) && (strpos($mail,'.') !== false) && (is_nan($eta) == false)){
        echo 'Accesso Riuscito';
    } else {
        echo 'Accesso Negato';
    }
} else {
    echo 'Accesso Negato';
}

 ?>
