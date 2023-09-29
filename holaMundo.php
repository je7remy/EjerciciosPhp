<!DOCTYPE html>
<html>
<head>
    <title>¡Hola, mundo en PHP!</title>
</head>
<body>

<?php
echo '<p>Hola desde la UMU</p>';
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br><br>";
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    echo 'Estás usando el peor navegador, Internet Explorer.<br />';}
    echo "<br>";
echo " ¡Hola, mundo!";
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) {
?>
<h3>strpos() debe haber devuelto no falso</h3>
<p>Estás usando el peor navegador, Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() debe haber devuelto falso</h3>
<p>Enhorabuena, no usas un producto Microsoft</p>
<?php
}
?>

<?php
$a = 137;
$b = "9.99";
$c = "ejemplo variables PHP";
// impresión
echo $a."<br>".$b."<br>".$c;

echo "<br>";
echo "salida en pantalla. ";
$a = 9;
echo $a; echo " El valor de a es $a.";

echo "<br>";
//uso de la impresion con printf
$nombre = "Juan";
$edad = 30;
printf("Hola, me llamo %s y tengo %d años.", $nombre, $edad);
echo "<br>";
$var = "texto"; $num = 3;
printf("Puede fácilmente intercalar <b>%s</b> con números <b>%d</b> <br>",$var,$num);
printf("<table border=1 cellpadding=10>");
for ($i=0; $i<10; $i++)
{
printf("<tr><td>%10.d</td></tr>",$i);
}
printf("</table>");


echo 'Mi color preferido es el ' . 'rojo';
// el resultado es: Mi color preferido es el rojo
$bebida = "leche";
// se puede usar para unir variables con textos
echo 'Mi bebida preferida es ' . $bebida;
// el resultado es: Mi bebida preferida es leche
$numero = 137;
echo "Me gusta el numero " . $numero;
// el resultado es -> Me gusta el numero 137



?>


<form method="post" action="pagina2.php">
    Ingrese su nombre:
    <input type="text" name="nombre">
    <br>
    <input type="submit" value="confirmar">
  </form>

</body>
</html>
