<?php
session_start();
$usuario_nombre = $_SESSION['usuario_nombre'] ?? null;
$usuario_tipo = $_SESSION['usuario_tipo'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="../img/logo editorial.png" type="image/png">
    <link rel="stylesheet" href="../style4.css">
    <title>Vida de Tinta</title>
</head>

<body>
    <header>
        <nav>
            <!-- Logo -->
            <div class="logo">
                <a href="#">
                    <img src="../img/logo editorial.png" height="100px">
                </a>
                VIDA DE TINTA <span>Editorial</span>
            </div>

            <!-- Menú -->
            <ul class="nav-links">
                <li><a href="#">Libros</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>

                <?php if ($usuario_nombre): ?>
                    <li class="user-menu">
                        <a href="#"><?php echo htmlspecialchars($usuario_nombre); ?> ▼</a>
                        <ul class="dropdown">
                            <li><a href="logout.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="../login.html">Iniciar sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section class="hero">
        <div class="hero-content">
            <h1>Un sofá, un buen libro y tú.</h1>
            <p>Descubre historias que te acompañarán toda la vida.</p>
        </div>
    </section>

    <section class="books">
        <h2>Nuestra Selección</h2>
        <div class="books-grid">

            <div class="book-card">
                <img src="../img/libro1.jpg" alt="Libro 1">
                <h3>La Biblioteca de la Medianoche</h3>
                <p>Matt Haig</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro2.jpg" alt="Libro 2">
                <h3>Extráñame, pero Vive</h3>
                <p>Fernando D'Sandi</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro3.jpg" alt="Libro 3">
                <h3>La teoría del todo</h3>
                <p>Stephen W. Hawking</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro4.jpg" alt="Libro 4">
                <h3>El Necronomicón</h3>
                <p>H.P LOVECRAFT</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro5.jpg" alt="Libro 5">
                <h3>De mí para mí</h3>
                <p>Chriss Braund</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro6.jpg" alt="Libro 6">
                <h3>Tan poca vida</h3>
                <p>Hanya Yanagihara</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro7.jpg" alt="Libro 7">
                <h3>El murmullo de las mujeres</h3>
                <p>Sofía Segovia</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro8.jpg" alt="Libro 8">
                <h3>La Guerra de los Mundos</h3>
                <p>H.G. Wells</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro9.jpg" alt="Libro 9">
                <h3>La Divina Comedia</h3>
                <p>Dante Alighieri</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

            <div class="book-card">
                <img src="../img/libro10.jpg" alt="Libro 10">
                <h3>Mestiza</h3>
                <p>Jennifer L. Aremntrout</p>
                <a href="#" class="btn-small">Ver más</a>
            </div>

        </div>
    </section>

    <footer class="site-footer">
    <div class="footer-content">
        <div class="footer-about">
            <h3>Vida de Tinta</h3>
            <p>Sumérgete en historias que te acompañarán toda la vida. Editorial dedicada a acercarte los mejores libros a tu hogar.</p>
        </div>
        <div class="footer-links">
            <h4>Enlaces</h4>
            <ul>
                <li><a href="#">Libros</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>Contacto</h4>
            <p>Email: info@vidadetinta.com</p>
            <p>Teléfono: +34 123 456 789</p>
            <p>Dirección: Calle Ficticia 123, Ciudad Literaria</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Vida de Tinta. Todos los derechos reservados.</p>
    </div>
</footer>


</body>

</html>
