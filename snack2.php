<?php

/**Passare come parametri GET name, mail e age e 
 * verificare (cercando i metodi che non conosciamo nella documentazione) 
 * che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
 * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = isset($_GET['name']) ? $_GET['name'] : "" ;
$age = isset($_GET['age']) ? $_GET['age'] : "" ;
$mail = isset($_GET['mail']) ? $_GET['mail'] : "" ;

function validation($name, $age, $mail)
{
    $regex = "/^(?=.*?[a-zA-Z0-9])(?=.*?[.])(?=.*?[@])[\w@.]{5,30}$/";
    if (strlen($name) <= 3 ||  intval($age) === 0 || !preg_match($regex, $mail))
       { 
        return false;}
    else
        return true;
}
if ($name && $age && $mail) {
    if (validation($name, $age, $mail)) {
        echo 'Accesso riuscito ';
    } 
    else {
        echo 'accesso negato';
    }
}
else 
    echo "inserisci dati";
