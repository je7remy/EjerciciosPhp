<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $valor = rand(1, 100);
    $inicio = 1;
    do {
        echo $inicio . "<br>";
        $inicio++;
    } while ($inicio <= $valor);
    ?>
</body>

</html>