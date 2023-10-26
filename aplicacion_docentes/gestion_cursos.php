<?php
include 'db_conex.php';


function registrarCurso($nombre, $codDocente) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO cursos (nombre, codDocente) VALUES (?, ?)");
    $stmt->execute([$nombre, $codDocente]);
}

function obtenerCursos() {
    global $pdo;
    $stmt = $pdo->query("SELECT c.cod, c.nombre, d.nombre as docente FROM cursos c JOIN docentes d ON c.codDocente = d.cod");
    return $stmt->fetchAll();
}

$stmt = $pdo->query('SELECT cursos.*, docentes.nombre as docente_nombre FROM cursos JOIN docentes ON cursos.codDocente = docentes.cod');
$cursos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang= "es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Cursos</title>
</head>
<body>
    <h1>Gestión de Cursos</h1>
 
    
</body>
</html>

