<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 03</title>
</head>
<body>
    

    <form action="" method="GET">
        <label>Digite um numero:</label>
        <input name="var1" type="text">

        <label>Digite o peso:</label>
        <input name="var2" type="text">

        <button type="submit">Enviar</button>
    </form>


    <?php

        $raio = $_GET['nome_da_variavel'];

        $area = 2 * M_PI * pow($raio, 2);
        $perimetro = M_PI * pow($raio, 2);

        echo "<p>O raio informado é: " . number_format($raio, 2) . "</p>";
        echo "<p>O perímetro deste círculo é: " . number_format($perimetro, 2, ',', ' ') . "</p>";
        echo "<p>A area deste círculo é: " . number_format($area, 2) . "</p>";


    ?>


</body>
</html>
