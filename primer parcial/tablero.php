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
    //se crea un ciclo for donde  j inicia en 1  y j es menor igual a la columna  
    for ($j = 1; $j <= $columna; $j++) {
        // se hace una condicional para alternar colores aqui se pregunta si la suma de j+i su modulo entre 2 es igaual a 0
        //entonses en la variable color se guarda el color blamco 
        if (($i + $j) % 2 == 0) {
            $color = "#FFFFFF";  // Blanco
        } else {
            //por falso se guarda el color que recuperameos 
            $color = $colo;  
        }

        // se crea las filas y columnas del tablero  y se coloca la imagen con el color   y se hace una condicional
        //se pregunta si i es igual ala posision n filas que recuperamos  y si j es igual ala ncolumnas que recuperamos
        //si cumple  entonses esntra
        if ($i == $nfila && $j == $ncolumna) {
            //inprimimos  la tabla identificada en sus posiciones  
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