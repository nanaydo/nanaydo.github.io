<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión y es administrador
if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    // Si no es administrador, redireccionar a la página de inicio
    header("Location: index.php");
    exit();
}

// Aquí podrías incluir cualquier lógica adicional necesaria para la administración de usuarios, como eliminar usuarios, cambiar roles, etc.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración de Usuarios</title>
</head>
<body>

<h1>Panel de Administración de Usuarios</h1>


<table>
    <thead>
        <tr>
            <th>Nombre de Usuario</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>Usuario1</td>
            <td>usuario1@example.com</td>
            <td>Usuario</td>
            <td>
               
                <form action="eliminar_usuario.php" method="post">
                    <input type="hidden" name="usuario_id" value="1">
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

</body>
</html>
