<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos SA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="message"></p>
    <div class="main-div">
        <h1> Cursos SA - Curso de <?php echo( $_GET['nome'] ) ?> </h1>
        <p>Aula #<?php echo( $_GET['aula'] ) ?> do curos de <?php echo( $_GET['nome'] ) ?>:</p>  
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jmQWOPDqxWA" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
        encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
    </div>
</body>
</html>