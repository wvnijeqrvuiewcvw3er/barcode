<?php
include "db.php"; 

if (isset($_POST['barcode']) && !empty($_POST['barcode'])) {
    $barcode = $_POST['barcode'];

    
    $check_query = "SELECT * FROM item WHERE barcode = ?";
    if ($stmt = mysqli_prepare($connection, $check_query)) {
        mysqli_stmt_bind_param($stmt, "s", $barcode);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            $error = "Error: El código de barras ya está registrado.";
        } else {

            date_default_timezone_set('America/Mexico_City'); 
            $DateTime = date("Y-m-d H:i:s"); 

            
            $insert_query = "INSERT INTO item (barcode, datereg) VALUES (?, ?)";
            if ($stmt = mysqli_prepare($connection, $insert_query)) {
                mysqli_stmt_bind_param($stmt, "ss", $barcode, $DateTime);
                $result = mysqli_stmt_execute($stmt);

                if (!$result) {
                    $error = "Error al registrar el código de barras: " . mysqli_stmt_error($stmt);
                } else {
                    $success = "Código de barras registrado exitosamente.";
                }
            }
        }
        mysqli_stmt_close($stmt);
    }
} else {
    $error = "Por favor, escanee un código de barras.";
}

?>