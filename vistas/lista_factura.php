<?php
// Conexión a la base de datos
$dsn = "mysql:host=localhost;dbname=inventario";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = "SELECT * FROM factura"; // Cambia "factura" por el nombre de tu tabla de facturas
    $stmt = $conexion->prepare($consulta);
    $stmt->execute();
    $facturas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<h1 class="title">Lista de Facturas Registradas</h1>';

    echo '<table class="table is-striped is-fullwidth">';
    echo '<thead>';
    echo '<tr><th>ID</th><th>Número de Factura</th><th>Proveedor</th><th>Monto</th><th>Fecha</th></tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($facturas as $factura) {
        echo '<tr>';
        echo '<td>' . $factura['factura_id'] . '</td>';
        echo '<td>' . $factura['factura_numero'] . '</td>';
        echo '<td>' . $factura['factura_proveedor'] . '</td>';
        echo '<td>' . $factura['factura_monto'] . '</td>';
        echo '<td>' . $factura['factura_fecha'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
