<?php

require 'figuras.php';

$figura = $_GET['figura'];

if(!in_array($figura, ['triangulo', 'circulo', 'cuadrado', 'rectangulo'])) {
    echo "Figura no reconocida.";
    exit;
}

if(
    ($figura == "triangulo" && isset($_POST['base']) && isset($_POST['altura'])) ||
    ($figura == "circulo" && isset($_POST['radio'])) ||
    ($figura == "cuadrado" && isset($_POST['lado'])) ||
    ($figura == "rectangulo" && isset($_POST['ancho']) && isset($_POST['largo']))
) {
    switch($figura) {
        case "triangulo":
            $triangulo = new Triangulo($_POST['base'], $_POST['altura']);
            $area = $triangulo->calcularArea();
            break;
        case "circulo":
            $circulo = new Circulo($_POST['radio']);
            $area = $circulo->calcularArea();
            break;
        case "cuadrado":
            $cuadrado = new Cuadrado($_POST['lado']);
            $area = $cuadrado->calcularArea();
            break;
        case "rectangulo":
            $rectangulo = new Rectangulo($_POST['ancho'], $_POST['largo']);
            $area = $rectangulo->calcularArea();
            break;
    }
    echo "El área de la figura es: " . $area;
    exit;
} else {
    echo '<form action="" method="post">';
    switch($figura) {
        case "triangulo":
            echo 'Base: <input type="number" name="base" required><br>';
            echo 'Altura: <input type="number" name="altura" required><br>';
            break;
        case "circulo":
            echo 'Radio: <input type="number" name="radio" required><br>';
            break;
        case "cuadrado":
            echo 'Lado: <input type="number" name="lado" required><br>';
            break;
        case "rectangulo":
            echo 'Ancho: <input type="number" name="ancho" required><br>';
            echo 'Largo: <input type="number" name="largo" required><br>';
            break;
    }
    echo '<input type="submit" value="Calcular Área">';
    echo '</form>';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar datos</title>
</head>
<body>
    <form action="" method="post">
        <?php
        $figura = $_GET['figura'];
        
        if($figura == 'triangulo') {
            echo 'Base: <input type="number" name="base" required><br>';
            echo 'Altura: <input type="number" name="altura" required><br>';
        } elseif($figura == 'circulo') {
            echo 'Radio: <input type="number" name="radio" required><br>';
        } elseif($figura == 'cuadrado') {
            echo 'Lado: <input type= "number" name= "lado" required><br>';
        }
        ?>
    </form>
    <h2>ir a pagina principal</h2>
        <a href="../pagina_principal">Ir a la pagina principal</a>
        <h2>ir al ejercico 1</h2>
        <a href="../list_numeros/list_num.html">Ir al ejercicio 1</a>
        <h2>ir al ejercicio 3</h2>
        <a href="../calcular_promedio/index.html">Ir al ejercicio 3</a>
        <h2>ir al ejercicio 4</h2>
        <a href="../aplicacion/index.html">Ir al ejercicio 4</a>
</body>
</html>
