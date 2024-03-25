<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 03</title>
</head>
<body>
    

    <form action="" method="GET">
        <label for="num">Digite um numero:</label>
        <input name="num" id="num" type="text">

        <button type="submit">Enviar</button>
    </form>


    <?php

        $raio = $_GET['num'];

        $area = 2 * M_PI * pow($raio, 2);
        $perimetro = M_PI * pow($raio, 2);

        echo "<p>O raio informado é: " . number_format($raio, 2) . "</p>";
        echo "<p>O perímetro deste círculo é: " . number_format($perimetro, 2, ',', ' ') . "</p>";
        echo "<p>A area deste círculo é: " . number_format($area, 2) . "</p>";

        echo "<h3> Funcoes Uteis </h3>";
        echo "<p>";
        echo "<br>Abs - Modulo: " . abs($raio); 
        echo "<br>Potencia: " . pow($raio, 4);
        echo "<br>Raiz Quadrada: " . sqrt($raio);

        echo "<br>Arredondar Normal: " . round($raio);
        echo "<br>Arredondar P/ Baixo: " . floor($raio);
        echo "<br>Arredondar P/ Cima: " . ceil($raio);
        echo "<br>Parte inteira: " . intval($raio);

        echo "</p>";
        

        echo "<h3> Mini Matematica </h3>";
        $a = 4; // 4
        $b = 5; // 5
        $c = $a + $b; // 9

        $c = $c + 5;
        $c += 5;
        
        $b = $b + $a;
        $b += $a;

        $a = $a + 1;
        $a += 1;
        $a++;

        $b = $b - 1;
        $b -= 1;
        $b--;

        $a++;
        ++$a;

        $b--;
        --$b;

        $b = 1999;
        echo "<br>Valor: " . --$b;
        echo "<br>Valor: " . $b;

        $var = "janela";
        
        $$var = 10;
        // $janela = 10
        

        echo "<br>";
        echo "<br> - " . $var;
        echo "<br> - " . $janela;



    ?>


</body>
</html>
