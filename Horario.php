<?php
    include "Asignaturas.php";
    include "Consultas.php";
    $colores = [];
    while ($fila = $resultado->fetch_array()) {
        $colores[$fila["nombre"]] = $fila["color"];
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Iván Rodríguez Gómez - Landero">
        <link rel="stylesheet" href="estilos.css">
        <title>Horario 2ºDAW</title>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="20">
            <?php
                foreach ($horario as $numeroFila => $fila) {
                    echo "<tr>";
                    foreach ($fila as $celda) {
                        if (isset($colores[$celda])) {
                            echo "<td style='background-color:".$colores[$celda]."'>".$celda."</td>";
                        } 
                        else {
                            echo "<td>" . $celda . "</td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>