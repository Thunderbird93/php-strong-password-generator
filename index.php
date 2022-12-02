<?php
session_start();
include __DIR__ . '/functions.php';
//var_dump($num);

// -- Milestone 1 --
// 1.-----Creare un Form.
// 2.-----Usando "GET" devo prendere ed inviare la lunghezza della  password (un numero)
// 3.-----Creare una Funzione per generare una password casuale (lettere min. e maius. numeri e simboli)

// -- Milestone 2 --
// 1. -----Verifico il corretto funzionamento.
// 2. -----Spostare la logica in un file functions.php

// -- Milestone 3 --
// 1. -----Creare una pagina desicata dove visualizzare la password generata.
// 2. Usare $_SESSION per mostrare la password.

if(isset($_GET['numero'])){
    echo pswMind($_GET['numero']);
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
    </main>
</body>
</html>