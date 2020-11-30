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
        <h1> Cursos SA </h1>
        <p>Seja bem vindo! Selecione o curso que deseja fazer:</p>  
        <div class="card">
            <div class="component" onclick="location.href='course.php?name=finanças'">
                <p>Curso de finanças</p>
            </div>
            <div class="component" onclick="location.href='course.php?name=marketing'">
                <p>Curso de marketing</p>
            </div>
            <div class="component" onclick="location.href='course.php?name=programação'">
                <p>Curso de programação</p>
            </div>
            <div class="component" onclick="location.href='course.php?name=gestão'">
                <p>Curso de gestão</p>
            </div>
        </div>
    </div>
</body>
</html>