<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>

<body>
    <pre>
    <?php
    require_once 'ContaBanco.php';

    $p1 = new ContaBanco(); // Jubileu
    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p1->setNumConta(1111);
    $p1->depositar(300);
    $p1->pagarMensal(12);
    $p1->sacar(338);
    $p1->fecharConta();
    echo "<hr>";
    $p2 = new ContaBanco(); // Creuza
    $p2->abrirConta("CP");
    $p2->setDono("Creuza");
    $p2->setNumConta(2222);
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->pagarMensal(20);
    $p2->sacar(530);
    $p2->fecharConta();
    echo "<hr>";

    print_r($p1);
    echo "<br>";
    print_r($p2);
    echo "<br><br>";


    ?>

    </pre>
</body>

</html>