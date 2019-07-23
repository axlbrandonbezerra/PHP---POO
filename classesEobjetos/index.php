<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classes e Bojetos</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1=new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
            $c1->tampar();
            $c1->destampar();
            $c1->rabiscar();
            print_r($c1);
            echo "<br>";
            $c2 = new Caneta;
            $c2->carga = 90;
            $c2->cor = "Verde";
            $c2->tampada = true;
            print_r($c2);
        ?>
    </body>
</html>
