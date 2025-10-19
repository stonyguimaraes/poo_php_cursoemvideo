<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    </pre>
    <?php
    require_once 'Caneta.php';

    $c1 = new Caneta("Bic", "Azul", 0.7);
    $c2 = new Caneta("Faber Castel", "Vermelha", 1.0);
    // $c1->setModelo("Bic Cristal");
    // $c1->setPonta(0.5);
    // print_r($c1);
    // print "Tenho uma caneta modelo " . $c1->getModelo() . " de ponta " . $c1->getPonta();
    print_r($c1);
    print_r('<br>');
    print_r($c2);
    ?>
    </pre>
</body>

</html>