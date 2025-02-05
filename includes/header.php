<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Abrita: Rutas hacia tu interior</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-image">
            <div class="overlay"></div>
            <div class="header-content">
                <h1>La Abrita</h1>
                <p>Vive las rutas hacia tu interior</p>
                <nav class="nav-links-container">
                    <ul class="nav-links">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../about.php">Sobre Nosotros</a></li>
                        <li><a href="../content.php">Contenido</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Imágenes de hojas -->
            <img src="../images/hoja1.png" alt="Hoja 1" class="hoja-esquina hoja-inferior-izquierda">
            <img src="../images/hoja2.png" alt="Hoja 2" class="hoja-esquina hoja-superior-derecha">
        </div>
    </header>
</body>
</html>
<script>
    window.addEventListener("scroll", function() {
        let hojas = document.querySelectorAll(".hoja-esquina");
        let screenHeight = window.innerHeight;

        hojas.forEach(function(hoja) {
            let position = hoja.getBoundingClientRect().top;
            if (position < screenHeight - 100) {
                hoja.classList.add("visible");

                // Aplicar el efecto después de 2 segundos
                setTimeout(() => {
                    hoja.classList.add("pequena");

                    // Volver a hacer el efecto de florecer después de 1 segundo
                    setTimeout(() => {
                        hoja.classList.remove("pequena");
                    }, 1000);
                }, 2000);
            }
        });
    });
</script>
