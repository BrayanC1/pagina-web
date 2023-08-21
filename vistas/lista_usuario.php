<?php
// Conexión a la base de datos
$dsn = "mysql:host=localhost;dbname=inventario";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = "SELECT * FROM usuario";
    $stmt = $conexion->prepare($consulta);
    $stmt->execute();
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    echo '<h1 class="title">Lista de Usuarios Registrados</h1>';

    echo '<table class="table is-striped is-fullwidth">';
    echo '<thead>';
    echo '<tr><th>ID</th><th>Nombre</th><th>Usuario</th></tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($usuarios as $usuario) {
        echo '<tr>';
        echo '<td>' . $usuario['usuario_id'] . '</td>';
        echo '<td>' . $usuario['usuario_nombre'] . '</td>';
        echo '<td>' . $usuario['usuario_usuario'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
