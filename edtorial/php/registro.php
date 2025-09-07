<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST["nombre"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $edad     = $_POST["edad"];
    $tipo     = $_POST["tipo_empleado"] ?? "invitado"; // valor por defecto

    // Cifrar contraseña
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Obtener IP
    $ip = $_SERVER['REMOTE_ADDR'];

    // Insertar en la BD
    $stmt = $conexion->prepare("INSERT INTO usuarios_editorial (nombre, email, password, edad, tipo_empleado, ip) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $nombre, $email, $password_hash, $edad, $tipo, $ip);

    if ($stmt->execute()) {
        // Crear sesión automáticamente
        session_start();
        $_SESSION["usuario_id"] = $stmt->insert_id;
        $_SESSION["usuario_nombre"] = $nombre;
        $_SESSION["usuario_tipo"] = $tipo;

        // Mensaje y redirección
        echo "✅ Registro exitoso, $nombre. Serás redirigido en 3 segundos...";

        // Redirigir después de 3 segundos
        echo "<script>
            setTimeout(function() {
                window.location.href = 'recorrido.php';
            }, 3000);
        </script>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
