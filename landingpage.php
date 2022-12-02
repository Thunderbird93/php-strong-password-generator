<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRONG PASSWORD GENERATOR - Landing Page</title>
</head>
<body>
    <h1>La tua password: <?php 
        if(isset($_GET['numero'])){
        echo pswMind($_GET['numero']);}?> 
    </h1>
</body>
</html>