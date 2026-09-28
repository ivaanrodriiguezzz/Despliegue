<!-- Nos traemos toda la información de Asignaturas.php como en Java-->
<?php include "Asignaturas2.php"; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Iván Rodríguez Gómez - Landero">
        <link rel="stylesheet" href="estilos.css">
        <title>Horario 2ºDAW</title>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="20">
            <tr>
                <th colspan="6">Horario 2ºDAW</th>
            </tr>
            <?php
                //Recorremos todas las filas y las visualizamos 
                $numeroFila=0;
                for($numeroFila=0;$numeroFila<count($horario);$numeroFila++){
                    $fila = $horario[$numeroFila];
                    echo "<tr>";
                    foreach ($fila as $celda) {
                        echo "<td>" . $celda . "</td>";
                    }
                    echo "</tr>";
                }
                //No fui capaz de hacer los colores
            ?>
        </table>
    </body>
</html>