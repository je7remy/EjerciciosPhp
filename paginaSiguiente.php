<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
  } else 
    if ($_REQUEST['radio1'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    }else 

        if ($_REQUEST['radio1'] == "multiplicacion") {
            $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
            echo "La multiplicacion es:" . $multiplicacion;
    } else {

        if ($_REQUEST['radio1'] == "division") {
            $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
            echo "La division es:" . $division;
    }
  }

  ?>

</body>

</html>
