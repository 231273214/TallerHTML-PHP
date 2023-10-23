<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $numerosArray = $_POST["nums"];
        $numeros = explode(",", $numerosArray);
        sort($numeros);
        foreach ($numeros as $numero) {
            echo $numero."|";
        }
        echo "<br>";

        $pares = [];
        $impares = [];
        foreach($numeros as $numero){
            if($numero % 2 == 0){
                $pares[] = $numero;
            }else{
                $impares[] = $numero;
            }
        }

        rsort($pares);
        echo "Números pares ordenados de mayor a menor ";
        foreach($pares as $par){
            echo $par. "|";
        }

        sort($impares);
        echo "Números impares ordenados de menor a mayor ";
        foreach($impares as $impar){
            echo $impar. "|";
        }
    }
?>
