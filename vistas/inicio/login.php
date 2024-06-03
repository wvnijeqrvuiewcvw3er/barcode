<?php
session_start();

// Verificar si el usuario ya está autenticado, si es así, redirigirlo a index.php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php");
    exit;
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "modelos/db.php"; // Incluir el archivo de conexión a la base de datos

    // Obtener los datos del formulario
    $username_input = $_POST["username"];
    $password_input = $_POST["password"];

    // Consulta SQL para verificar las credenciales del usuario
    $query = "SELECT * FROM inicio WHERE usuario = '$username_input' AND contraseña = '$password_input'";
    $result = mysqli_query($connection, $query);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($result) == 1) {
        // Iniciar sesión
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username_input;

        // Redirigir al usuario a index.php
        header("Location: vistas/inicio/principal.php");
        exit;
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }

    // Cerrar conexión
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="es">
    <h1>Hola</h1>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            width: 100%;
        }

        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center">Iniciar Sesión</h2>
            <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>



</html>
