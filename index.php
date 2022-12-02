<?php
//var_dump($num);

// -- Milestone 3 --
// 1. -----Creare una pagina desicata dove visualizzare la password generata.
// 2. Usare $_SESSION per mostrare la password.



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
        if(isset($_GET['numero'])){
            echo pswMind($_GET['numero']);
        }
        ?> </h1>
    </main>
</body>
</html>