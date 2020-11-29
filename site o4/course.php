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
        <h1> Cursos SA - Curso de <?php echo( $_GET['name'] ) ?> </h1>
        <p>Aulas do curos de <?php echo( $_GET['name'] ) ?>:</p>  
        <div class="lessons">
            <div class="class">
                <p>Aula #01</p>
                <p>
                    <a href="./lesson.php?nome=<?php echo( $_GET['name'] ) ?>&aula=01">Assistir</a>
                </p>
            </div>
            <div class="class">
                <p>Aula #02</p>
                <p>
                    <a href="./lesson.php?nome=<?php echo( $_GET['name'] ) ?>&aula=02">Assistir</a>
                </p>
            </div>
            <div class="class">
                <p>Aula #03</p>
                <p>
                    <a href="./lesson.php?nome=<?php echo( $_GET['name'] ) ?>&aula=03">Assistir</a>
                </p>
            </div>
            <div class="class">
                <p>Aula #04</p>
                <p>
                    <a href="./lesson.php?nome=<?php echo( $_GET['name'] ) ?>&aula=04">Assistir</a>
                </p>
            </div>
            <div class="class">
                <p>Aula #05</p>
                <p>
                    <a href="./lesson.php?nome=<?php echo( $_GET['name'] ) ?>&aula=05">Assistir</a>
                </p>
            </div>
        </div>  
    </div>
</body>
</html>