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
        <h1>Online-library</h1>
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
            <h2>Bienvenidos a Online-library</h2>

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
                        <img src="imagenes/Alas_de_sangre.webp" alt="Portada de Alas de sangre">
                    </div>

                    <h3>Alas de sangre</h3>
                    <p class="autor">
                        Rebecca Yarros
                    </p>
                    <p>$29.990</p>

                    <a href="#" class="boton">
                        Ver producto
                    </a>
                </article>


                <article class="producto">
                    <div class="imagen-producto">
                        <img src="imagenes/Carrie.jpg" alt="Portada de Carrie">
                    </div>

                    <h3>Carrie</h3>
                    <p class="autor">
                        Stephen King
                    </p>

                    <p>$14.990</p>

                    <a href="#" class="boton">
                        Ver producto
                    </a>
                </article>


                <article class="producto">
                    <div class="imagen-producto">
                        <img src="imagenes/Habitos_atomicos.webp" alt="Portada de Habitos atomicos">
                    </div>

                    <h3>Habitos atomicos</h3>
                    <p class="autor">
                        James Clear
                    </p>
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
        <p>&copy; 2026 Online-library - Todos los derechos reservados</p>
    </footer>

</body>
</html>