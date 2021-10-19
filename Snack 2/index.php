<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi 
che non conosciamo nella documentazione) che name sia più lungo 
di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET['name'];  // length maggiore di 3 caratteri
    $mail = $_GET['mail'];  // deve contenere un punto e una chiocciola
    $age = $_GET['age'];  // age deve essere un numero

    // check name
    if (strlen($name) > 3) {
        echo 'name: true <br>';
    } else {
        echo 'name: false <br>';
    }
    // check age
    if ( is_numeric($age)) {
        echo 'age: true <br>';
    } else {
        echo 'age: false <br>';
    }
    // check mail
    if ( filter_var($mail, FILTER_VALIDATE_EMAIL) ) {
        echo 'mail: true <br>';
    } else {
        echo 'mail: false <br>';
    }

    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    if ( strlen($name) > 3 && is_numeric($age) && filter_var($mail, FILTER_VALIDATE_EMAIL) ) {
        echo 'Accesso riuscito';
    } 
    else {
        echo 'Accesso negato';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body style="background-color:black; color:white; font-family: verdana; margin: 50px" >
    
</body>
</html>