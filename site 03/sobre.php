<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./style.css">
    <title>Suitless - Sobre</title>
</head>
<body>
    <p class="responsividade"></p>
    <div class="site">
        <h4><img src="./logo.png"></h4>
        <div class="mensagem">
            <p class="mensagem_principal">Com o nome e o email criado, falta apenas pensar em uma senha para finalizar o cadastro!</p>
            <br><br>
            <p class="descrição">Para criar uma conta, <a href="https://suitless.com.br/register?name=<?php echo($_GET['name'])?>&email=<?php echo($_GET['email'])?>" target="_blank">clique nesse link!</a><br><br>Ou se quiser saber mais sobre essa rede social,<a href="https://suitless.com.br/sobre" target="_blank"> clique aqui</a><p>
            <br><br>
    
            <form action="https://suitless.com.br/sobre" method="get">
                <button type="submit" class="ver_mais">Ir para o site</button>
            </form>
    
        </div>    
    </div>
</body>
</html>

