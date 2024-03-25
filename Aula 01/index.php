<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
</head>
<body>

    <header style="background-color: yellow;">
        <nav>
            <ul>
                <a href="./index.html" style="background-color: green;">Pagina Inicial</a>
                <a href="./calendario.html">Calendario</a>
                <a href="./contato.html">Contato</a>
            </ul>
        </nav>
    </header>
    
    <h1> AULA DE PHP - RELEMBRANDO HTML</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus sollicitudin urna, auctor tristique felis viverra a. Nam ornare facilisis euismod. Suspendisse lobortis volutpat purus id sagittis. Sed fringilla auctor leo, id blandit dolor elementum vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed in sem volutpat ipsum vehicula vestibulum. Curabitur vehicula orci a tristique feugiat. Cras velit ex, bibendum ut consectetur et, pretium eget nisl. Mauris quam elit, egestas iaculis iaculis vel, volutpat in risus. Ut at tincidunt sem. Proin lacinia nibh a neque egestas, a blandit sem dictum.</p>

    <p>Nullam sodales arcu tortor, ut iaculis tortor mattis sit amet. Quisque purus sapien, vehicula vel tellus id, cursus tempus lorem. Fusce finibus, arcu at tempus placerat, enim felis tristique nibh, eget tempor massa justo ac urna. Maecenas sed semper nisl. Nunc ligula tellus, hendrerit vehicula pellentesque vitae, scelerisque a ligula. Nulla varius lacus dui, a cursus urna tempus vesssssl. Phasellus bibendum malesuada facilisis. Cras fermentum sagittis hendrerit. ssssMorbi arcu lorem, semper quis luctus pellentesque, semper at elit. Nunc elit nunc, pulvinar sit amet ligula eget, tristique laoreet turpis. Nulla facilisi.</p>

    
    <?php   

        echo "<h2>Olá Mundo!</h2>";
        print "<h3> Tambem Funciona :O </h3>";

        $numero = 3;
        $numero2 = 5;
        $numero3 = $numero + $numero2;

        echo "-> <h3>" . $numero . "</h3> +  <h1>" . $numero2 . "</h1> =  <h2>". $numero3 . "<h2>";
        
    
    
    ?>


</body>
</html>