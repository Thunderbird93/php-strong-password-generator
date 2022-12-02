<?php

//var_dump($num);

// -- Milestone 1 --
// 1.-----Creare un Form.
// 2.-----Usando "GET" devo prendere ed inviare la lunghezza della  password (un numero)
// 3.-----Creare una Funzione per generare una password casuale (lettere min. e maius. numeri e simboli)

// -- Milestone 2 --
// 1. -----Verifico il corretto funzionamento.
// 2. -----Spostare la logica in un file functions.php

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
        <h1>La tua password: <?php echo(@$psw); ?> </h1>
    </main>
</body>
</html>