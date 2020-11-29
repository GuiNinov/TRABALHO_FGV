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
                <form class="valuation-form" action="results.php">
                    <p>Qual empresa deseja analisar?</p>
                    <input type="text" class="input-field" name="company" required /> 
                    <p>Qual o último fluxo de caixa da companhia?</p>
                    <input type="number" class="input-field" name="cashflow" required/> 
                    <p>Qual a taxa de desconto projetada?</p>
                    <input type="number" class="input-field" name="descount" required/> 
                    <p>Qual a taxa de crescimento da perpetuidade?</p>
                    <input type="number" class="input-field" name="growth" required/> 
                    <input type="hidden" value="<?php echo($_GET['name'])?>" name="name"/>
                    <br>
                    <br>
                    <small>*Coloque os valores em formato de porcentagem. Ex: 15% escreva apenas 15</small>
                    <br>
                    <br>
                    <button type="submit" class="btn">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>