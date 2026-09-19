<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Online-library | Carrito</title>

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


    <main>

        <section class="carrito">

            <h2>🛒 Mi carrito</h2>


            <!-- PRODUCTO -->
            <article class="item-carrito">

                <div class="item-imagen">

                    <img
                        src="imagenes/Alas_de_sangre.webp"
                        alt="Portada de Alas de sangre"
                    >

                </div>

                <div class="item-info">

                    <h3>Alas de sangre</h3>

                    <p>Rebecca Yarros</p>

                    <p class="precio">
                        $19.990
                    </p>

                </div>

                <div class="item-cantidad">

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

                <div class="item-subtotal">

                    <strong>
                        $19.990
                    </strong>

                </div>

            </article>


            <!-- FORMULARIO DE COMPRA -->
            <section class="formulario-compra">

                <h2>Datos de compra</h2>

                <form id="formCompra" action="#" method="post">

                    <!-- NOMBRE -->
                    <div class="campo">

                        <label for="nombre">
                            Nombre completo
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Ingresa tu nombre completo"
                        >

                        <small id="errorNombre"></small>

                    </div>


                    <!-- CORREO -->
                    <div class="campo">

                        <label for="correo">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="ejemplo@correo.com"
                        >

                        <small id="errorCorreo"></small>

                    </div>


                    <!-- DIRECCIÓN -->
                    <div class="campo">

                        <label for="direccion">
                            Dirección
                        </label>

                        <input
                            type="text"
                            id="direccion"
                            name="direccion"
                            placeholder="Ingresa tu dirección"
                        >

                        <small id="errorDireccion"></small>

                    </div>


                    <!-- COMUNA -->
                    <div class="campo">

                        <label for="comuna">
                            Comuna
                        </label>

                        <input
                            type="text"
                            id="comuna"
                            name="comuna"
                            placeholder="Ingresa tu comuna"
                        >

                        <small id="errorComuna"></small>

                    </div>


                    <!-- MÉTODO DE PAGO -->
                    <fieldset>

                        <legend>
                            Método de pago
                        </legend>

                        <label>
                            <input
                                type="radio"
                                name="pago"
                                value="webpay"
                            >

                            WebPay
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="pago"
                                value="transferencia"
                            >

                            Transferencia bancaria
                        </label>

                        <small id="errorPago"></small>

                    </fieldset>


                    <!-- RESUMEN -->
                    <div class="resumen-carrito">

                        <h3>Resumen de compra</h3>

                        <div class="linea-resumen">

                            <span>Subtotal</span>

                            <span>$19.990</span>

                        </div>


                        <div class="linea-resumen">

                            <span>Envío</span>

                            <span>$3.990</span>

                        </div>


                        <hr>


                        <div class="total-carrito">

                            <span>Total</span>

                            <strong>
                                $23.980
                            </strong>

                        </div>


                        <button
                            type="submit"
                            class="boton"
                        >
                            Finalizar compra
                        </button>

                    </div>

                </form>

            </section>

        </section>

    </main>


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