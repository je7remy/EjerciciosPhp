<?php
// Solicitar información al usuario
$nombre = $_POST['nombre'];
$valorDevengado = floatval($_POST['valorDevengado']);
$salarioMinimo = floatval($_POST['salarioMinimo']);

// Calcular los descuentos según el valor devengado
if ($valorDevengado <= 10 * $salarioMinimo) {
    $descuentoSalud = 0.05 * $valorDevengado;
    $descuentoPensiones = 0.138 * $valorDevengado;
    $descuentoSeguridadSocial = 0.1 * $valorDevengado;
} elseif ($valorDevengado <= 18 * $salarioMinimo) {
    $descuentoSalud = 0.1 * $valorDevengado;
    $descuentoPensiones = 0.15 * $valorDevengado;
    $descuentoSeguridadSocial = 0.05 * $valorDevengado;
} elseif ($valorDevengado <= 30 * $salarioMinimo) {
    $descuentoSalud = 0.25 * $valorDevengado;
    $descuentoPensiones = 0.1 * $valorDevengado;
    $descuentoSeguridadSocial = 0.12 * $valorDevengado;
    $impuestoGuerra = 0.02 * $valorDevengado;
} else {
    // En este caso, se excede el límite de 30 salarios mínimos
    echo 'El valor devengado excede el límite de 30 salarios mínimos.' . PHP_EOL;
    exit();
}

// Calcular el salario después de descuentos
$salarioDespuesDescuentos = $valorDevengado - ($descuentoSalud + $descuentoPensiones + $descuentoSeguridadSocial);

// Mostrar resultados
echo "<br>";
echo "<br>";
echo 'Nombre:' . $nombre . PHP_EOL; 
echo "<br>";
echo "<br>";
echo 'Salario devengado: RD$ ' . number_format($valorDevengado, 2) . PHP_EOL;
echo "<br>";
echo "<br>";
echo 'Salario mínimo actual: RD$ ' . number_format($salarioMinimo, 2) . PHP_EOL;
echo "<br>";
echo "<br>";
echo 'Descuento para salud: RD$ ' . number_format($descuentoSalud, 2) . PHP_EOL;
echo "<br>";
echo "<br>";
echo 'Descuento para pensiones: RD$ ' . number_format($descuentoPensiones, 2) . PHP_EOL;
echo "<br>";
echo "<br>";
echo 'Descuento para seguridad social: RD$ ' . number_format($descuentoSeguridadSocial, 2) . PHP_EOL;
echo "<br>";
echo "<br>";

if (isset($impuestoGuerra)) {
    echo 'Impuesto de guerra: RD$ ' . number_format($impuestoGuerra, 2) . PHP_EOL;
}

echo 'Salario después de descuentos: RD$ ' . number_format($salarioDespuesDescuentos, 2) . PHP_EOL;
?>
