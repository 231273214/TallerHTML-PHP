<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["nombreMateria"])) {
        $_SESSION["nombreMateria"] = $_POST["nombreMateria"];
        $_SESSION["cantidadNotas"] = $_POST["cantidadNotas"];
        $_SESSION["rangoMin"] = $_POST["rangoMin"];
        $_SESSION["rangoMax"] = $_POST["rangoMax"];
        $_SESSION["notas"] = [];
    } else {
        array_push($_SESSION["notas"], $_POST["nota"]);
        
        if (count($_SESSION["notas"]) == $_SESSION["cantidadNotas"]) {
            $suma = array_sum($_SESSION["notas"]);
            $promedio = $suma / $_SESSION["cantidadNotas"];
            $notaMinimaAprobatoria = ($_SESSION["rangoMin"] + $_SESSION["rangoMax"]) / 2 + 0.5;
            
            if ($promedio >= $notaMinimaAprobatoria) {
                echo "Has aprobado la materia " . $_SESSION["nombreMateria"] . " con un promedio de " . $promedio;
            } else {
                echo "No has aprobado la materia " . $_SESSION["nombreMateria"] . ". Necesitas al menos " . $notaMinimaAprobatoria . " para aprobar.";
            }
            
            echo '<br><a href="index.html">Regresar al menú</a>';
            
            session_unset();
            session_destroy();
            return;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nota: <input type="number" step="0.01" name="nota"><br>
  <input type="submit">
</form>

</body>
</html>