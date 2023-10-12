<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $numerosArray = $_POST["nums"];
        $numeros = explode(",", $numerosArray);
        sort($numeros);
        foreach ($numeros as $numeros) {
            echo $numeros."|";
        }
        echo "<br>";

        $pares;
        $impares;
        foreach($numeros as $numero){
            if($numero % 2 == 0){
                $pares[] = $numeros;
            }else{
                $impares[] = $numeros;
            }

            rsort($pares);
            echo "Números pares ordenados de mayor a menor ";
            foreach($pares as $par){
                echo $par. "|";
            }

            sort($impares);
            echo "Números impares ordenados de mayor a menor ";
            foreach($impares as $impar){
                echo $impar. "|";
            }
        }
    }
?>