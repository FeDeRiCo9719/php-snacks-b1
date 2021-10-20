<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array 
mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [

        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],

        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    foreach ( $db['teachers'] as $key => $item ) {
        echo $item. ':' . $key . '<br>';
        foreach ( $item as $key => $we ) {
            echo $key . ':' . $we . '<br>';
        }    
    }

    foreach ( $db['pm'] as $key => $item ) {
        echo $item. ':' . $key . '<br>';
        foreach ( $item as $key => $we ) {
            echo $key . ':' . $we . '<br>';
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    
</body>
</html>