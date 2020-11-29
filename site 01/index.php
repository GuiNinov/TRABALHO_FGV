<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Calculadora de Valuation</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Valuation</h1>
        <div class ="content-area">
            <p class="alert"></p>
            <div class="responsive">
                <h3 class="title-area">Seja bem-vido!!</h3>
                <form action="success.php" method="GET">
                    <label for="name">Nome: </label>
                    <input type="name" name="name" class="input-field" required><br><br>
                    <label for="last_name">Sobrenome: </label>
                    <input type="last_name" name="last_name" class="input-field" required/><br><br> 
                    <button type="submit" class="btn">Cadastrar</button>
                </form>    
            </div>
        </div>
    </div>
</body>
</html>