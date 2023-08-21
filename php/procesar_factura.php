<?php
// Datos Vacíos
require_once "main.php";

$factura_numero = $_POST["factura_numero"];
$factura_proveedor = $_POST["factura_proveedor"];
$factura_monto = $_POST["factura_monto"];
$factura_fecha = $_POST["factura_fecha"];


if (empty($factura_numero) || empty($factura_proveedor) || empty($factura_monto) || empty($factura_fecha)) {
    echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Ha ocurrido un error al llenar los datos, algún dato está vacío.</strong>
    </div>';
    exit();
}

// Conexión a la Base de Datos
require_once "main.php";

try {
    $conn = conexion(); // Reemplaza "conexion()" con tu función de conexión a la base de datos

    // Verificar conexión
    if (!$conn) {
        echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Ha ocurrido un error en la conexión a la base de datos.</strong>
        </div>';
        exit();
    }

    // Consulta para insertar datos en la tabla factura
    $sql = "INSERT INTO factura (factura_numero, factura_proveedor, factura_monto, factura_fecha)
            VALUES (:factura_numero, :factura_proveedor, :factura_monto, :factura_fecha)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':factura_numero', $factura_numero);
    $stmt->bindParam(':factura_proveedor', $factura_proveedor);
    $stmt->bindParam(':factura_monto', $factura_monto);
    $stmt->bindParam(':factura_fecha', $factura_fecha);


    if ($stmt->execute()) {
        echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Registro de factura exitoso.</strong>
        </div>';
    } else {
        echo '<div class="notification is-primary">
        <button class="delete"></button>
        </strong>Error al registrar la factura.</strong>
        </div>';
    }

    $conn = null; // Cerrar la conexión
} catch (PDOException $e) {
    echo '<div class="notification is-primary">
    <button class="delete"></button>
    </strong>Error en la base de datos: ' . $e->getMessage() . '</strong>
    </div>';
}
?>
