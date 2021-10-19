<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
    // array teams and points
    $partite = [
        [
            'home' => 'Boston Celtics',
            'away' => 'New York Knicks',
            'pointsHome' => '43',
            'pointsAway' => '79',
        ],
        [
            'home' => 'Chicago Bulls',
            'away' => 'Milwaukee Bucks',
            'pointsHome' => '55',
            'pointsAway' => '68',
        ],
        [
            'home' => 'Orlando Magic',
            'away' => 'Los Angeles Lakers',
            'pointsHome' => '56',
            'pointsAway' => '41',
        ],
        [
            'home' => 'Dallas Mavericks',
            'away' => 'Houston Rockets',
            'pointsHome' => '31',
            'pointsAway' => '74',
        ],
        [
            'home' => 'Minnesota Timberwolves',
            'away' => 'Miami Heat',
            'pointsHome' => '47',
            'pointsAway' => '65',
        ]
    ];

    // array length
    $length = count($partite);

    // loop and print points
    // for ($i = 0; $i < $length; $i++) {
    //     echo $partite[$i]['home'].' - '.$partite[$i]['away'].' | '.$partite[$i]['pointsHome'].' - '.$partite[$i]['pointsAway'].'<br>';
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body style="background-color:black; color:white; font-family: verdana; margin: 50px" >
    <h1>NBA</h1>

    <?php
        for ($i = 0; $i < $length; $i++) {
            echo $partite[$i]['home'].' - '.$partite[$i]['away'].' | '.$partite[$i]['pointsHome'].' - '.$partite[$i]['pointsAway'].'<br>';
        }       
    ?>
</body>
</html>