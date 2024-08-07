<?php
// complete_purchase.php
include 'config.php';

if (isset($_POST['name'], $_POST['surname'], $_POST['id_number'], $_POST['phone'], $_POST['country'], $_POST['city'], $_POST['address'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    // Insertar datos en la tabla "informacion"
    $insertSQL = "INSERT INTO informacion (nombre, apellido, cedula, numero, pais, ciudad, ubicacion) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertSQL);
    $stmt->bind_param('sssssss', $name, $surname, $id_number, $phone, $country, $city, $address);

    if ($stmt->execute()) {
        // Eliminar productos de tb_productos
        $deleteSQL = "DELETE FROM tb_productos";
        if ($conn->query($deleteSQL) === TRUE) {
            echo "Compra realizada con éxito";
        } else {
            echo "Error al eliminar productos: " . $conn->error;
        }
    } else {
        echo "Error al insertar información: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
