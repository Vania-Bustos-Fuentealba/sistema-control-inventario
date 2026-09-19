<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Online-library | Detalle del producto</title>

    <link rel="stylesheet" href="../css/tienda.css">
</head>

<body>

    <!-- CABECERA -->
    <header class="header">

        <div class="logo">
            <h1>Online-library</h1>
        </div>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="#">Nosotros</a>
            <a href="#">Blog</a>
            <a href="#">Contacto</a>
            <a href="carrito.php">🛒 Carrito</a>
        </nav>

    </header>


    <!-- DETALLE DEL PRODUCTO -->
    <main>

        <section class="detalle-producto">

            <!-- IMAGEN -->
            <div class="detalle-imagen">

                <img
                    src="imagenes/Alas_de_sangre.webp"
                    alt="Portada de Alas de sangre"
                >

            </div>


            <!-- INFORMACIÓN -->
            <div class="detalle-info">

                <p class="categoria-producto">
                    Fantasía
                </p>

                <h2>Alas de sangre</h2>

                <p class="autor">
                    Rebecca Yarros
                </p>

                <p class="detalle-descripcion">
                    Descubre una historia llena de aventuras,
                    dragones y desafíos en un mundo fantástico.
                </p>

                <p class="detalle-precio">
                    $19.990
                </p>

                <p>
                    <strong>Stock disponible</strong>
                </p>

                <div class="cantidad">

                    <label for="cantidad">
                        Cantidad:
                    </label>

                    <input
                        type="number"
                        id="cantidad"
                        name="cantidad"
                        value="1"
                        min="1"
                    >

                </div>

                <br>

                <a href="carrito.php" class="boton">
                    🛒 Agregar al carrito
                </a>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer>

        <h3>Online-library</h3>

        <p>
            Tu próxima historia comienza aquí 📚
        </p>

        <p>
            &copy; 2026 Online-library
        </p>

    </footer>

</body>

</html>