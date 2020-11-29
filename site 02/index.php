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
            <a href="./index.php" class="active">Produtos</a></br></br>
            <a href="./chart2.php">Carrinho</a></br></br>
            <a href="./dev.php" class="">Perfil</a></br></br>
            <a href="./config.php" class="">Configurações</a>
        </div>
        <div class="products">
            <div class="car-area">
                <div class="car-header">
                    <img src="db11.jpg" class="car-img" alt=""/>
                </div>
                <div class="car-footer">
                    <p>Aston Martin</p>
                    <p><strong>R$ 1.03 M</strong></p>
                </div>
                <div style="text-align:center">
                    <button class="car-btn" onclick="aston_martin()">Comprar</button>
                </div>
            </div>
            <div class="car-area">
                <div class="car-header">
                    <img src="2020-bentley-flying-spur.jpg" class="car-img" alt=""/>
                </div>
                <div class="car-footer">
                    <p>Bentley</p>
                    <p><strong>R$ 829,33K</strong></p>
                </div>
                <div style="text-align:center">
                    <button class="car-btn" onclick="bentley()">Comprar</button>
                </div>
            </div>
            <div class="car-area">
                <div class="car-header">
                    <img src="maserati.jpg" class="car-img" alt=""/>
                </div>
                <div class="car-footer">
                    <p>Maserati</p>
                    <p><strong>R$ 945,83K</strong></p>
                </div>
                <div style="text-align:center">
                    <button class="car-btn" onclick="maserati()">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function aston_martin(){
        location.href="./chart.php?car=Aston+Martin&price=1.03M"
    }
    function bentley(){
        location.href="./chart.php?car=Bentley&price=829,33K"

    }
    function maserati(){
        location.href="./chart.php?car=Maserati&price=945,83K"

    }
</script>
</html>