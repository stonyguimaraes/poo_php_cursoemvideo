<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta();
    $c1->modelo = "Bic Cristal";
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->carga = 80;
    $c1->tampada = false;
    $c1->destampar();
    $c1->rabiscar();

    print_r($c1);

    echo "<br>";
    echo "<hr>";

    $c2 = new Caneta();
    $c2->modelo = "Bic Preta";
    $c2->cor = "Preta";
    $c2->ponta = 0.7;
    $c2->carga = 50;
    $c2->tampada = true;
    $c2->tampar();
    $c2->rabiscar();
    print_r($c2);

    echo "<br>";
    echo "<hr>";
    ?>
</body>

</html>