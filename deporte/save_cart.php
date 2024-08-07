<?php
include 'config.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del carrito desde el cuerpo de la solicitud
    $cartItems = json_decode(file_get_contents('php://input'), true);

    if (is_array($cartItems) && !empty($cartItems)) {
        // Preparar consulta SQL
        $stmt = $conn->prepare("INSERT INTO tb_productos1 (nombre, precio) VALUES (?, ?)");

        foreach ($cartItems as $item) {
            $productName = $item['name'];
            $productPrice = $item['price'];

            $stmt->bind_param("sd", $productName, $productPrice);

            if (!$stmt->execute()) {
                echo json_encode(['success' => false, 'error' => $stmt->error]);
                exit();
            }
        }

        // Respuesta exitosa
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Datos del carrito inválidos.']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Método no permitido.']);
}
?>
