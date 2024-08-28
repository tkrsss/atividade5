<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calcular Área do Triângulo</h1>
        <form method="post">
            <label for="base">Base do Triângulo:</label>
            <input type="number" id="base" name="base" step="0.01" required>

            <label for="altura">Altura do Triângulo:</label>
            <input type="number" id="altura" name="altura" step="0.01" required>

            <button type="submit">Calcular Área</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            
            $area = ($base * $altura) / 2;

            
            $limite = 100;
            if ($area > $limite) {
                echo "<p>A área do triângulo é $area, que é maior que $limite.</p>";
            } else {
                echo "<p>A área do triângulo é $area, que é menor ou igual a $limite.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
