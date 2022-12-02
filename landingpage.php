<?php
session_start();
?>

    <h1>La tua password: <?php 
        if(isset($_GET['numero'])){
        echo pswMind($_GET['numero']);}?> 
    </h1>
