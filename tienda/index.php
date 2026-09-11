<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tienda - Inicio</title>

    <link rel="stylesheet" href="../css/tienda.css">
</head>

<body>

    <!-- ENCABEZADO -->
    <header>
        <h1>Mi Tienda</h1>
    </header>

    <!-- NAVEGACIÓN -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="#">Nosotros</a>
        <a href="#">Blog</a>
        <a href="#">Contacto</a>
        <a href="carrito.php">🛒 Carrito</a>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main>

        <!-- BANNER PRINCIPAL -->
        <section class="hero">
            <h2>Bienvenidos a nuestra tienda</h2>

            <p>
                Descubre nuestros productos y encuentra
                lo que estás buscando.
            </p>

            <a href="productos.php" class="boton">
                Ver productos
            </a>
        </section>


        <!-- PRODUCTOS DESTACADOS -->
        <section class="destacados">

            <h2>Productos destacados</h2>

            <div class="productos">

                <article class="producto">
                    <div class="imagen-producto">
                        Imagen
                    </div>

                    <h3>Producto 1</h3>

                    <p>$9.990</p>

                    <a href="#" class="boton">
                        Ver producto
                    </a>
                </article>


                <article class="producto">
                    <div class="imagen-producto">
                        Imagen
                    </div>

                    <h3>Producto 2</h3>

                    <p>$14.990</p>

                    <a href="#" class="boton">
                        Ver producto
                    </a>
                </article>


                <article class="producto">
                    <div class="imagen-producto">
                        Imagen
                    </div>

                    <h3>Producto 3</h3>

                    <p>$19.990</p>

                    <a href="#" class="boton">
                        Ver producto
                    </a>
                </article>

            </div>

        </section>

    </main>


    <!-- PIE DE PÁGINA -->
    <footer>
        <p>&copy; 2026 Mi Tienda - Todos los derechos reservados</p>
    </footer>

</body>
</html>