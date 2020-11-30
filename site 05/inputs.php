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
        <h2>Gerador de Análise SWOT</h2>
        <form action="./swot.php">
            <div>
                <label for="s">Forças</label><br>
                <input type="text" name="s" required>
            </div>
            <br>
            <div>
                <label for="w">Fraquezas</label><br>
                <input type="text" name="w" required>
            </div>
            <br>
            <div>
                <label for="o">Oportunidades</label><br>
                <input type="text" name="o" required>
            </div>
            <br>
            <div>
                <label for="a">Ameaças</label><br>
                <input type="text" name="a" required>
            </div>
            <input type="hidden" name="nome" value="<?php echo($_GET['nome'])?>">
            <button type="submit">Gerar</button>
        </form>
    </div>
</body>
</html>