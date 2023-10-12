<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Nómina</title>
</head>
<body>
<br>
    <br>
    <h1> <center>Calculadora de Nómina</center></h1>
    <form action="calcular_nomina.php" method="post">

    <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="valorDevengado">Valor devengado:</label>
        <input type="number" id="valorDevengado" name="valorDevengado" step="0.01" required><br><br>

        <label for="salarioMinimo">Salario mínimo:</label>
        <input type="number" id="salarioMinimo" name="salarioMinimo" step="0.01" required><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
