<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 $cantFila=6;
 $cantColumna=4;
 ?>

 <table border="2">

    <?php
        for ($n=0;$n<=$cantFila;$n++){

    ?>
        <tr>
            <?php
                for ($f=1;$f<=$cantColumna;$f++){
                    ?>
                    <td><?php if ($n==0) { echo "<strong>Campo $f</strong>";} else { echo "fila $n, columna $f";} ?></td>
                    <?php
                }
                ?>
        </tr>
        <?php
        }
        ?>
 </table>
</body>
</html>