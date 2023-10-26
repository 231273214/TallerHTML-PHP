<?php
include 'db_conex.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"]) && isset($_POST["idOcupacion"])) {
    registrarDocente($_POST["nombre"], $_POST["idOcupacion"]);
    echo "Docente registrado con éxito!";
   
}




function registrarDocente($nombre, $idOcupacion) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO docentes (nombre, idOcupacion) VALUES (?, ?)");
    $stmt->execute([$nombre, $idOcupacion]);
}

function actualizarDocente($cod, $nombre, $idOcupacion) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE docentes SET nombre = ?, idOcupacion = ? WHERE cod = ?");
    $stmt->execute([$nombre, $idOcupacion, $cod]);
}

function tieneCursosAsignados($codDocente) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM cursos WHERE codDocente = ?");
    $stmt->execute([$codDocente]);
    return $stmt->fetchColumn() > 0;
}

function eliminarDocente($cod) {
    global $pdo;
    if(!tieneCursosAsignados($cod)) {
        $stmt = $pdo->prepare("DELETE FROM docentes WHERE cod = ?");
        $stmt->execute([$cod]);
    } else {
        return "No se puede eliminar el docente porque tiene cursos asignados.";
    }
}

$stmt = $pdo->query('SELECT * FROM docentes');
$docentes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang= "es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Docentes</title>
</head>
<body>
    <h1>Gestión de Docentes</h1>
  
    
</body>
</html>

