<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Shop</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Sports Shop</h1>
            <p>¡Encuentra todo lo que necesitas para tu deporte favorito!</p>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#informacion">Información</a></li>
                    <li><a href="#balones">Balones</a></li>
                    <li><a href="#camisas">Camisas</a></li>
                    <li><a href="#guantes">Guantes</a></li>
                    <li><a href="#uniformes">Uniformes Completos</a></li>
                    <li><a href="#implementos">Implementos</a></li>
                </ul>
            </nav>
            <div class="cart">
                <button class="cart-link" onclick="openCart()">🛒</button>
            </div>
        </div>
    </header>

    <main>
        <!-- Sección de Balones -->
        <section id="balones">
            <h2>Balones</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="img/balon1.jpg" alt="Balón 1">
                    <h3>Balón 1</h3>
                    <p>Balón de fútbol profesional.</p>
                    <p class="price">$20.00</p>
                    <button type="button" onclick="addToCart('Balón 1', 20.00, 'img/balon1.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/balon2.jpg" alt="Balón 2">
                    <h3>Balón 2</h3>
                    <p>Balón para entrenamiento.</p>
                    <p class="price">$22.00</p>
                    <button type="button" onclick="addToCart('Balón 2', 22.00, 'img/balon2.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/balon3.jpg" alt="Balón 3">
                    <h3>Balón 3</h3>
                    <p>Balón de fútbol para partidos.</p>
                    <p class="price">$25.00</p>
                    <button type="button" onclick="addToCart('Balón 3', 25.00, 'img/balon3.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/balon4.jpg" alt="Balón 4">
                    <h3>Balón 4</h3>
                    <p>Balón de fútbol básico.</p>
                    <p class="price">$18.00</p>
                    <button type="button" onclick="addToCart('Balón 4', 18.00, 'img/balon4.jpg')">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Camisas -->
        <section id="camisas">
            <h2>Camisas</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="img/camisa1.jpg" alt="Camisa 1">
                    <h3>Camisa 1</h3>
                    <p>Camisa de fútbol de alta calidad.</p>
                    <p class="price">$30.00</p>
                    <button type="button" onclick="addToCart('Camisa 1', 30.00, 'img/camisa1.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/camisa2.jpg" alt="Camisa 2">
                    <h3>Camisa 2</h3>
                    <p>Camisa para entrenamientos.</p>
                    <p class="price">$32.00</p>
                    <button type="button" onclick="addToCart('Camisa 2', 32.00, 'img/camisa2.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/camisa3.jpg" alt="Camisa 3">
                    <h3>Camisa 3</h3>
                    <p>Camisa ligera para verano.</p>
                    <p class="price">$28.00</p>
                    <button type="button" onclick="addToCart('Camisa 3', 28.00, 'img/camisa3.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/camisa4.jpg" alt="Camisa 4">
                    <h3>Camisa 4</h3>
                    <p>Camisa de equipo profesional.</p>
                    <p class="price">$35.00</p>
                    <button type="button" onclick="addToCart('Camisa 4', 35.00, 'img/camisa4.jpg')">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Guantes -->
        <section id="guantes">
            <h2>Guantes</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="img/guantes1.jpg" alt="Guantes 1">
                    <h3>Guantes 1</h3>
                    <p>Guantes de arquero.</p>
                    <p class="price">$15.00</p>
                    <button type="button" onclick="addToCart('Guantes 1', 15.00, 'img/guantes1.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/guantes2.jpg" alt="Guantes 2">
                    <h3>Guantes 2</h3>
                    <p>Guantes para entrenamiento.</p>
                    <p class="price">$18.00</p>
                    <button type="button" onclick="addToCart('Guantes 2', 18.00, 'img/guantes2.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/guantes3.jpg" alt="Guantes 3">
                    <h3>Guantes 3</h3>
                    <p>Guantes de alta resistencia.</p>
                    <p class="price">$20.00</p>
                    <button type="button" onclick="addToCart('Guantes 3', 20.00, 'img/guantes3.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/guantes4.jpg" alt="Guantes 4">
                    <h3>Guantes 4</h3>
                    <p>Guantes profesionales.</p>
                    <p class="price">$22.00</p>
                    <button type="button" onclick="addToCart('Guantes 4', 22.00, 'img/guantes4.jpg')">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Uniformes Completos -->
        <section id="uniformes">
            <h2>Uniformes Completos</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="img/equipocompleto1.jpg" alt="Uniforme Completo 1">
                    <h3>Uniforme Completo 1</h3>
                    <p>Uniforme de fútbol completo.</p>
                    <p class="price">$50.00</p>
                    <button type="button" onclick="addToCart('Uniforme Completo 1', 50.00, 'img/equipocompleto1.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/equipocompleto2.jpg" alt="Uniforme Completo 2">
                    <h3>Uniforme Completo 2</h3>
                    <p>Uniforme con nombre personalizado.</p>
                    <p class="price">$55.00</p>
                    <button type="button" onclick="addToCart('Uniforme Completo 2', 55.00, 'img/equipocompleto2.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/equipocompleto3.jpg" alt="Uniforme Completo 3">
                    <h3>Uniforme Completo 3</h3>
                    <p>Uniforme para equipos profesionales.</p>
                    <p class="price">$60.00</p>
                    <button type="button" onclick="addToCart('Uniforme Completo 3', 60.00, 'img/equipocompleto3.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/equipocompleto4.jpg" alt="Uniforme Completo 4">
                    <h3>Uniforme Completo 4</h3>
                    <p>Uniforme básico para entrenamientos.</p>
                    <p class="price">$45.00</p>
                    <button type="button" onclick="addToCart('Uniforme Completo 4', 45.00, 'img/equipocompleto4.jpg')">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <!-- Sección de Implementos -->
        <section id="implementos">
            <h2>Implementos</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="img/implemento1.jpg" alt="Implemento 1">
                    <h3>Implemento 1</h3>
                    <p>Implemento para ejercicios.</p>
                    <p class="price">$10.00</p>
                    <button type="button" onclick="addToCart('Implemento 1', 10.00, 'img/implemento1.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento2.jpg" alt="Implemento 2">
                    <h3>Implemento 2</h3>
                    <p>Accesorios para entrenamiento.</p>
                    <p class="price">$12.00</p>
                    <button type="button" onclick="addToCart('Implemento 2', 12.00, 'img/implemento2.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento3.jpg" alt="Implemento 3">
                    <h3>Implemento 3</h3>
                    <p>Equipamiento para gimnasio.</p>
                    <p class="price">$14.00</p>
                    <button type="button" onclick="addToCart('Implemento 3', 14.00, 'img/implemento3.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento4.jpg" alt="Implemento 4">
                    <h3>Implemento 4</h3>
                    <p>Equipos para deportes variados.</p>
                    <p class="price">$16.00</p>
                    <button type="button" onclick="addToCart('Implemento 4', 16.00, 'img/implemento4.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento5.jpg" alt="Implemento 5">
                    <h3>Implemento 5</h3>
                    <p>Accesorios deportivos.</p>
                    <p class="price">$18.00</p>
                    <button type="button" onclick="addToCart('Implemento 5', 18.00, 'img/implemento5.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento6.jpg" alt="Implemento 6">
                    <h3>Implemento 6</h3>
                    <p>Herramientas para entrenamientos.</p>
                    <p class="price">$20.00</p>
                    <button type="button" onclick="addToCart('Implemento 6', 20.00, 'img/implemento6.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento7.jpg" alt="Implemento 7">
                    <h3>Implemento 7</h3>
                    <p>Equipamiento especializado.</p>
                    <p class="price">$22.00</p>
                    <button type="button" onclick="addToCart('Implemento 7', 22.00, 'img/implemento7.jpg')">Añadir al carrito</button>
                </div>
                <div class="product-item">
                    <img src="img/implemento8.jpg" alt="Implemento 8">
                    <h3>Implemento 8</h3>
                    <p>Accesorios profesionales.</p>
                    <p class="price">$24.00</p>
                    <button type="button" onclick="addToCart('Implemento 8', 24.00, 'img/implemento8.jpg')">Añadir al carrito</button>
                </div>
            </div>
        </section>
    </main>

     <!-- Ventana Modal del Carrito -->
     <div id="cartModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCart()">&times;</span>
            <h2>Carrito de Compras</h2>
            <div id="cartItems" class="modal-body"></div>
            <div class="modal-footer">
                <button onclick="emptyCart()">Vaciar carrito</button>
                <button onclick="checkout()">Realizar compra</button>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sports Shop. Todos los derechos reservados.</p>
    </footer>

    <script src="JS/script.js"></script>
</body>
</html>
