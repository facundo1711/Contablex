<?php
// Incluir la conexión
$pdo = require 'conexion.php';

try {
    // Consultar directamente la Vista de reportes diarios que creamos en Supabase
    $stmt = $pdo->query("SELECT * FROM reporte_ventas_diarias LIMIT 10");
    $reportes = $stmt->fetchAll();

    // Ejemplo de cómo iterar los datos en tu frontend
    foreach ($reportes as $fila) {
        echo "Fecha: " . $fila['fecha'] . " | Producto: " . $fila['producto_nombre'] . " | Total: $" . $fila['total_individual_producto'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Error al consultar los datos: " . $e->getMessage();
}
