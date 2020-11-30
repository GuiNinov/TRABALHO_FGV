<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./style.css">
    <title>Suitless</title>
</head>
<body>
    <p class="responsividade"></p>
    <div class="site">
        <h4><img src="./logo.png"></h4>
        <div class="mensagem">
    
            <p class="mensagem_principal"><b>"Be a change maker. Connect with people just like you."</b></p>
            <br><br>
    
            <p class="descrição">É o lema da nova rede social voltada para pessoas que pensam fora da caixa!<p>
            <br><br>
    
            <form action="sobre.php" method="get">
                <p>Digite o seu email para ficar por dentro!</p><br>
                <label for="name">Nome completo: </label>
                <input type="nome" class="nome_input" name="name" required>
                <br><br>
                <label for="email">Email: </label>
                <input type="email" class="email_input" name="email" required>
                <br><br>
                <button type="submit" class="ver_mais">Enviar</button>
                <br><br>
            </form>
    
        </div>
    </div>
</body>
</html>