<?php
// confirmation.php
include 'config.php';

// Manejar la eliminación de productos si se presiona el botón "Cancelar Pedido"
if (isset($_POST['cancel_order'])) {
    $deleteSQL = "DELETE FROM tb_productos1";
    if ($conn->query($deleteSQL) === TRUE) {
        // Redirige a la página principal
        header("Location: deporte.php");
        exit();
    } else {
        echo "Error al cancelar el pedido: " . $conn->error;
    }
}

// Manejar la confirmación de compra y mostrar el modal
if (isset($_POST['complete_purchase'])) {
    // Mostrar el modal para completar la compra
    $showModal = true;
} else {
    $showModal = false;
}

// Consulta para obtener los productos en la base de datos
$sql = "SELECT * FROM tb_productos1";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Compra</title>
    <link rel="stylesheet" href="css/confirmation.css">
    <script src="js/confirmation.js" defer></script>
</head>
<body>
    <header>
        <h1>Confirmación de Compra</h1>
    </header>
    
    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                            echo "<td>$" . number_format($row['precio'], 2) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No hay productos en la base de datos.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="footer">
                <form method="post">
                    <button type="submit" name="complete_purchase">Completar Compra</button>
                    <button type="submit" name="cancel_order">Cancelar Pedido</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Ventana Modal para Completar Compra -->
    <?php if ($showModal): ?>
    <div id="purchaseModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Información del Cliente</h2>
            <form id="purchaseForm" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="surname">Apellidos:</label>
                <input type="text" id="surname" name="surname" required><br>
                <label for="id_number">Cédula:</label>
                <input type="text" id="id_number" name="id_number" required><br>
                <label for="phone">Número Celular:</label>
                <input type="text" id="phone" name="phone" required><br>
                <label for="country">País:</label>
                <input type="text" id="country" name="country" required><br>
                <label for="city">Ciudad:</label>
                <input type="text" id="city" name="city" required><br>
                <label for="address">Ubicación:</label>
                <input type="text" id="address" name="address" required><br>
                <button type="submit" name="finalize_purchase">Finalizar Compra</button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Sports Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
