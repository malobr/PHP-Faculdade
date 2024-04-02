<?php

    function nomeBonito(){
        echo "Testando minha funcao bonita!";

    }


        nomeBonito();
        nomeBonito();
        nomeBonito();
        nomeBonito();
        nomeBonito();

        function criaTitulo($texto){
            echo "<h1>" . $texto . "</h1>";
        }

        criaTitulo("Titulo Aula 5 - Funcoes");

        function tituloLegal($texto){
            echo"<h2>##########</h2>";
            echo"<h2>##" . $texto . "##</h2>";
            echo"<h2>##########</h2>";
        }


        tituloLegal("Calcular Medias");

        function calcularMedia($nome, $nota1, $nota2){

            if($media >= 7){
                echo"<p> O aluno(a) {$nome} foi aprovado com media de {$media}</p>";
            } else{
                echo"<p>O aluno(a) {$nome} foi reprovado com media ... melhor nao saber >.< {$media}... </p>";
            }
        }
        
        calcularMedia("Aristoteles", 9.9, 3.6);
        calcularMedia("Platao", 4.5, 9.2);
        calcularMedia("Socrates", 8.9, 9.6);


        function somar($a, $b){
            $soma = $a + $b;

            echo"<li> {$a} + {$b} = {$soma}</li>";
        }

        function somarNumeros(...$numeros){
            echo"$numeros";
            $soma"<li>";

            for($i = 0; $i < count($numeros); $i++){
                $soma .= "$numeros[$i] + ";
                echo $numeros[$i] . " + ";
        }

        echo " = {$soma}";

            somar(3, 4);
            somar(8, 3);
            somar(4, 5);
            somar(7, 7);
            somar(1, 9);
            somar(0, 2);

            echo"<br><br>";
            somarNumeros(3, 4, 10, 18, 22, 48, 99);



            function teste($nome, $numero, $texto, ...$numeros){
                echo"<br>";
                //echo print_r($coisas);
                echo var_dump($coisas);

            }

            teste("Nome", 30, "aa", 10, "outro texto", 5, 19.3, true, false);
?>