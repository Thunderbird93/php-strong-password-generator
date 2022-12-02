<?php
session_start();

//echo __DIR__;

//var_dump($num);

// -- Milestone 3 --
// 1. -----Creare una pagina desicata dove visualizzare la password generata.
// 2. Usare $_SESSION per mostrare la password.

include __DIR__ . '/functions.php';

if(!empty($_GET['numero'])){
    $response = pswMind($_GET['numero']);
}else{
    $response = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRONG PASSWORD GENERATOR</title>
</head>
<body>
    <main>
        <form action="index.php" method="GET">
            <label>Quanto vuoi che sia lunga la tua password?</label>
            <input type="number" name="numero" placeholder="Inserisci un numero">
            <button type="submit">Crea Password</button>
        </form>
        <h1>La tua password: <?php 
            echo $response;
        ?> </h1>
    </main>
</body>
</html>