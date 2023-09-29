<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  date_default_timezone_set('America/Santo_Domingo');

  echo "La fecha de hoy es:";
  $fecha = date("d/m/Y");
  echo $fecha;
  echo "<br>";
  echo "La hora actual es:";
  $hora = date("H:i:s");
  echo $hora;
  echo "<br>";
  ?>
  <a href="paginasusesiva.php">Siguiente problema</a>
</body>

</html>
