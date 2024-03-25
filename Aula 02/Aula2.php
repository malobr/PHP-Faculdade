
<!-- Comentario HTML -->

<?php 

    // Comentario PHP

    /*
    echo "<h1> Olá Mundo! </h1>";

    $num = 3;
    $texto = "String legal";
    $float = 5.7;
    $bool = false;
    
    $nome = "Jose";
    $idade = 87;
    $faculdade = true;

    echo "<div>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    $faculdade = "ADS";
    echo "Faculdade: " . $faculdade . "<br>";
    echo "</div>"*/

    /* Faça um Programa que verifique se uma 
        letra digitada é "F" ou "M". 
        Conforme a letra escrever: 
        F - Feminino, M - Masculino, Sexo Inválido.

        Voce escolheu M - Masculino 
        Voce escolheu F - Feminino
        Sexo Inválido
    */

    $sexo = "L";

    /*
    if($sexo == "M"){
        echo "<h1>Voce escolheu M - Masculino</h1>";
    } else if ($sexo == "F") {
        echo "<h2>Voce escolheu F - Feminino</h2>";
    } else {
        echo "<h3>OP Inválida</h3>";
    }*/


    switch($sexo){
        case "M":
            // aqui
            break;

        case "F":
            // aqui
            break;

        default:
            //aqui
            break;
    }

    echo var_dump($sexo);

   


   


?>