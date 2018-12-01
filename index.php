<?php
$array2 = [5, 67, 8];
$array2[10] = 6;
$array2[] = 8;
var_dump($array2);
$n = 0;
foreach ($array2 as $valor)
    $array[$n++] = $valor;
$array2 = $array;
var_dump($array2);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
echo "<h2>Añado cambios</h2>";
echo "<p>Añadimos otra linea</p>";
echo "<p>Añadimos otra linea desde github</p>";
?>
    </body>
</html>
