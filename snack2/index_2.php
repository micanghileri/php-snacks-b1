<!-- Passare come parametri GET name, mail ed age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto
e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$mail = $_GET['mail'];
$name = $_GET['name'];
$age = $_GET['age'];

if ((empty($mail)) || (empty($name)) || (empty($age))) {
    $text = 'Qualcosa non va. Compila tutti i campi';
} else {
    if ((strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) && (strlen($name) > 3) && (is_numeric($age))){
        $text = 'Accesso riuscito';
    } else {
        $text = 'Accesso negato';
    }
};
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="https://img.icons8.com/cotton/2x/login-rounded-right--v2.png">
        <title>Php - Snack 2</title>
    </head>
    <body>
        <p><?php echo $text ?></p>
    </body>
</html>
