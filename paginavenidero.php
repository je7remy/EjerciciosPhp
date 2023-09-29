<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $dato = date("L");
  if ($dato == 1)
    echo "Año bisiesto";
  else
    echo "Año no bisiesto";
  echo "<br>";
  echo "Día de la semana:";
  $dato = date("w");
  switch ($dato) {
    case 0:
      echo "domingo";
      break;
    case 1:
      echo "lunes";
      break;
    case 2:
      echo "martes";
      break;
    case 3:
      echo "miércoles";
      break;
    case 4:
      echo "jueves";
      break;
    case 5:
      echo "viernes";
      break;
    case 6:
      echo "sábado";
      break;
  }
  ?>
</body>

</html>
