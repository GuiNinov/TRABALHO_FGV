<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Carros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="alert"></p>
    <div class="box">
        <div class="left-side">
            <h2>Loja de Carros</h2>
            <a href="./index.php">Produtos</a></br></br>
            <a href="./chart2.php" class="active">Carrinho</a></br></br>
            <a href="./dev.php" class="">Perfil</a></br></br>
            <a href="./config.php" class="">Configurações</a>
        </div>
        <div class="chart">
            <h2>Olá</h2>
            <p>Gostaria de comprar um <?php echo($_GET['car']) ?></p>
            <p>por apenas  <?php echo($_GET['price']) ?> ?</p>
            <button class="chart-btn" onclick="alert('Compra efetuada com sucesso!')">Comprar agora!</button>
        </div>
    </div>
</body>
</html>