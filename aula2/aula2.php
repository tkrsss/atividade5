<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_POST['converter_para_fahrenheit'])){
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius *9/5) + 32;
            echo "$celsius ºC é igual a $fahrenheit ºF.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_POST['converter_para_celsius'])){
            $fahrenheit = $_POST['fahrenheit'];
            $celsius = ($fahrenheit - 32) * 5/9 ;
            echo "$fahrenheit ºF é igual a $celsius ºC.";
        }
    }

    ?>

    <form method="post">
        <h1>Questão 3 </h1>
        <label for="celsius"> Temperatura em Celsius: </label>
        <input type="number" id="celsius" name="celsius" step="0.01" required>
        <button type="submit" name="converter_para_fahrenheit"> Converter para Fahrenheit </button>
    </form>

    <form method="post">
        <h1>Questão 3 </h1>
        <label for="fahrenheit"> Temperatura em Fahrenheit: </label>
        <input type="number" id="fahrenheit" name="fahrenheit" step="0.01" required>
        <button type="submit" name="converter_para_celsius"> Converter para Celsius </button>
    </form>


    

</body>

</html>