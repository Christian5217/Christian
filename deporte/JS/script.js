let cart = [];

// Agrega un producto al carrito
function addToCart(name, price, imgSrc) {
    cart.push({ name, price, imgSrc });
    updateCart();
}

// Actualiza la vista del carrito
function updateCart() {
    const cartItemsContainer = document.getElementById('cartItems');
    cartItemsContainer.innerHTML = '';

    cart.forEach((item, index) => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('cart-item');
        itemDiv.innerHTML = `
            <img src="${item.imgSrc}" alt="${item.name}" class="cart-item-img">
            <div class="cart-item-details">
                <p>${item.name}</p>
                <p>$${item.price.toFixed(2)}</p>
                <button onclick="removeFromCart(${index})">Eliminar</button>
            </div>
        `;
        cartItemsContainer.appendChild(itemDiv);
    });

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p>Tu carrito está vacío.</p>';
    }

    // Guarda el carrito en localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Elimina un producto del carrito
function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}

// Vacía el carrito
function emptyCart() {
    cart = [];
    localStorage.removeItem('cart');
    updateCart();
}

// Abre el modal del carrito
function openCart() {
    document.getElementById('cartModal').style.display = 'block';
}

// Cierra el modal del carrito
function closeCart() {
    document.getElementById('cartModal').style.display = 'none';
}

// Realiza la compra
function checkout() {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    fetch('save_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(cartItems),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Redirige a la página de confirmación
            window.location.href = 'confirmation.php';
        } else {
            console.error('Error al guardar los datos:', data.error);
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
}
