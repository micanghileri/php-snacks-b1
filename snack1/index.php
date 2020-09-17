<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$gameCalendar = [
    [
        'home team' => 'Golden State Warriors',
        'visiting team' => 'Oklahoma City Thunder',
        'home team scores' => '120',
        'visiting team scores' => '105'
    ],
    [
        'home team' => 'Cleveland Cavaliers',
        'visiting team' => 'Los Angeles Lakers',
        'home team scores' => '103',
        'visiting team scores' => '105'
    ],
    [
        'home team' => 'Orlando Magic',
        'visiting team' => 'Milwaukee Bucks',
        'home team scores' => '112',
        'visiting team scores' => '130'
    ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
        <link rel="icon" type="image/png" href="https://www.freepnglogos.com/uploads/basketball-png/basketball-open-letter-3.png">
        <title>Php - Snack 1</title>
    </head>
    <body>
        <ul>
            <?php for($i = 0; $i < count($gameCalendar); $i++){ ?>
            <li>
                <p><?php echo($gameCalendar[$i]['home team']. '<p class="vs">VS</p>' .$gameCalendar[$i]['visiting team']. ' <i class="fas fa-basketball-ball"></i> ' .$gameCalendar[$i]['home team scores']. ' - ' .$gameCalendar[$i]['visiting team scores']); ?></p>
            </li>
            <?php } ?>
        </ul>
    </body>
</html>
