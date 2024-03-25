<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF SWITCH</title>
</head>
<body>

    <!-- 
        Faça um Programa que verifique se uma 
        letra digitada é "F" ou "M". 
        Conforme a letra escrever: 
        F - Feminino, M - Masculino, Sexo Inválido.

        Voce escolheu M - Masculino 
        Voce escolheu F - Feminino
        Sexo Inválido
        -->
   
    <form action="" method="GET">
        <label>F ou M: </label>
        <input name="sexo" type="text">

        <button type="submit">Enviar</button>
    </form>

    <?php 
    
        $sexo = strtoupper($_GET['sexo']);
        echo "<br>Sexo BB: " . $sexo;
        
        switch ($sexo) {
            case 'F':
                echo "<br>Voce escolheu F - Feminino";
                break;
            
            case 'M':
                echo "<br>Voce escolheu M - Masculino";
                break;

            default:
                echo "<br>Sexo Invalido";
                break;
        }


    
    ?>


</body>
</html>