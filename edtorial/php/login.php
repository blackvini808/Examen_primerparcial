<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST["correo"];
    $password = $_POST["password"];

    // Buscar usuario por email
    $stmt = $conexion->prepare("SELECT id, nombre, password, tipo_empleado FROM usuarios_editorial WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        // Verificar contraseña
        if (password_verify($password, $usuario["password"])) {
            // Guardamos datos en sesión
            $_SESSION["usuario_id"] = $usuario["id"];
            $_SESSION["usuario_nombre"] = $usuario["nombre"];
            $_SESSION["usuario_tipo"] = $usuario["tipo_empleado"];

            // Redirigir a página principal del nuevo sistema
            header("Location: recorrido.php");
            exit();
        } else {
            echo "❌ Contraseña incorrecta.";
        }
    } else {
        echo "❌ No existe un usuario con ese correo.";
    }

    $stmt->close();
    $conexion->close();
}
?>
