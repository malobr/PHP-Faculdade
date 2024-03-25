<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF SWITCH</title>
</head>
<body>

   
    <form action="" method="GET">
        <label>Em que ano vc nasceu? </label>
        <input name="ano" type="text">

        <button type="submit">Enviar</button>
    </form>

    <?php 
    
        $ano = $_GET['ano'];
        $idade = 2024 - $ano;
        echo "Sua idade: " . $idade;
        
        if($idade > 18 && $idade < 70){
            echo "<br>Olha.. vc PRECISA votar! e pode dirigir";
        } else if($idade == 18){
            echo "<br> Voce pode votar e dirigir! e ano especial (Ex) :)";
        } else if(($idade > 16 && $idade < 18) || $idade > 70){
                echo "<br>Legal vc pode votar! Mas nãoo dirigir";
        } else{
            echo "<br>Espere mais um pouco :/";
        }

    
    ?>


</body>
</html>