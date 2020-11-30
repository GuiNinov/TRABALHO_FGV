<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWOT Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="aviso"></p>
    <div class="conteudo">
        <h2>Aqui está a sua Análise SWOT <?php echo($_GET['nome']) ?></h2>
        <div class="main">
            <div class="right-side top-side-left">
                <div class="top-side "> 
                    <p class="title">Forças</p>
                    <p><?php echo($_GET['s'])?></p>
                </div>
                <div class="bot-side">
                    <p class="title">Fraquezas</p>
                    <p><?php echo($_GET['w'])?></p>
                </div>
            </div>
            <div class="left-side">
                <div class="top-side">
                    <p class="title">Oportunidades</p>    
                    <p><?php echo($_GET['o'])?></p>
                </div>
                <div class="bot-side">
                    <p class="title">Ameaças</p>    
                    <p><?php echo($_GET['a'])?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>