<?php
    
function Formulario($nome, $numero){
    echo "<h2>{$nome}</h2>"; // Corregido: agregué el punto y coma al final de la línea
    echo '<form action="." method="GET">'; // Corregido: agregué un espacio después de cada atributo

    for($i = 0; $i < 5; $i++){
        echo "<br>";
        echo "<label>Numero " . ($i+1) . "</label>"; // Corregido: agregué un espacio después de "Numero"
        echo "<input name='num" . ($i+1) . "' type='text'/><br/>"; // Corregido: agregué comillas simples alrededor de 'num'
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}
?>
