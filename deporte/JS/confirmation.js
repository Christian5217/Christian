// js/confirmation.js

function openModal() {
    document.getElementById('purchaseModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('purchaseModal').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function() {
    // Abrir modal si se debe mostrar
    if (document.getElementById('purchaseModal')) {
        openModal();
    }

    // Manejar el envío del formulario
    const form = document.getElementById('purchaseForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(form);

            fetch('complete_purchase.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert("Su compra se realizó con éxito");
                window.location.href = 'deporte.php';
            });
        });
    }
});
