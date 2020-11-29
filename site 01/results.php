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
                <h3 class="title-area">Fala, <?php echo($_GET['name'])?> !!</h3>
                <p>O valor justo previsto para a <?php echo($_GET['company'])?> é 
                    <?php 
                        echo(intval($_GET['cashflow']*100/$_GET['descount'] - $_GET['growth']))
                    ?> dinheiros
                
                </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <small>*O valor foi calculado utilizando como base o método de Gordon</small>

            </div>
        </div>
    </div>
</body>
</html>