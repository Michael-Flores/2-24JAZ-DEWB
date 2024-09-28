<?php
//recupero los datos por el metodo pos de preginta2.html
$nfila=$_POST['nf'];
$ncolumna=$_POST['nc'];
$fila=$_POST['f'];
$columna=$_POST['c'];
$colo=$_POST['color'];

//imprimimos la tabla 
echo "<table style='border-collapse: collapse;'>";
//se crea un ciclo for donde  i inicia en 1  y i es menor igual a la fila  
for ($i = 1; $i <= $fila; $i++) {
    //imprimimos un tr que es parte de la tabla
    echo "<tr>";
    for ($j = 1; $j <= $columna; $j++) {
        // Alternar colores de las celdas (blanco y rojo)
        if (($i + $j) % 2 == 0) {
            $color = "#FFFFFF";  // Blanco
        } else {
            $color = $colo;  // Rojo
        }

        // Resaltar la celda seleccionada con la imagen y el color personalizado
        if ($i == $nfila && $j == $ncolumna) {
            echo "<td style='background-color:#FFC000;'>
                    <img src='img/Bowser.png' width='50px'>
                  </td>";
        } else {
            echo "<td style='border: 1px solid black; width: 100px; height:50px; background-color: $color; '></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>