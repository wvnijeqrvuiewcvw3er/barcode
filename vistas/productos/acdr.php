<?php
include "modelos/db.php";
$error = "";

if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_query = "DELETE FROM item WHERE id = $delete_id";
    $delete_result = mysqli_query($connection, $delete_query);
    if ($delete_result) {
        $error = "Registro eliminado exitosamente.";
    } else {
        $error = "Error al eliminar el registro: " . mysqli_error($connection);
    }
}

// Incluir el código de registro del código de barras
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['barcode'])) {
    include "modelos/barcode_reg.php";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        .container {
            margin-top: 50px;
        }

        .pos-form {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .alert {
            margin-top: 20px;
        }
    </style>
    <script>
        function clearError() {
            const alert = document.querySelector('.alert');
            if (alert) {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 1500);
            }
        }
    </script>
</head>
<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1>Registro de Actas</h1>
            <ul class="breadcrumb side">
                <li><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
                <li class="active"><a href="#">Registro de Actas</a></li>
            </ul>
        </div>
    </div>

    <body onload="document.pos.barcode.focus(); clearError();">
        <div class="container">
            <form class="pos-form" name="pos" action="" method="post">
                <div class="form-group">
                    <label for="barcode">Lectura de código de barras</label>
                    <input type="text" name="barcode" id="barcode" class="form-control" placeholder="Ingrese el código de barras">
                </div>
            </form>

            <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            <div class="card">

            <table class="table table-striped" id="sampleTable">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Folio</th>
                        <th>Fecha de registro</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query_grap = "SELECT * FROM item";
                    $query_exe = mysqli_query($connection, $query_grap);

                    while ($row = mysqli_fetch_assoc($query_exe)) {
                        $id = $row['id'];
                        $barcode = $row['barcode'];
                        $date = $row['datereg'];
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($id); ?></td>
                            <td><?php echo htmlspecialchars($barcode); ?></td>
                            <td><?php echo htmlspecialchars($date); ?></td>
                            <td>
                                <a href="?delete_id=<?php echo $id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este registro?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
</div>
</body>

</html>