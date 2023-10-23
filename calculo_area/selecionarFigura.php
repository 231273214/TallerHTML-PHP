<?php
if(isset($_POST['figura'])){
    header("Location: ingresarDatos.php?figura=" . $_POST['figura']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar figura</title>
</head>
<body>
    <form action="" method="post">
        <label>Seleccione una figura:
            <select name="figura">
                <option value="triangulo">Triángulo</option>
                <option value="circulo">Círculo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectángulo</option>
            </select>
        </label><br><br>
        <input type="submit" value="Seleccionar">
    </form>
</body>
</html>


