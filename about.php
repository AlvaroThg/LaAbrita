<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - La Abrita</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-aboutUs.css">
</head>
<body>
    <main>
        <section class="about-us">
            <div class="container">
                <h1>Sobre Nosotros</h1>
                <div class="about-us-wrapper">
                    <div class="about-us-content">
                        <p>Bienvenidos a <strong>La Abrita</strong>, un refugio natural alejado del bullicio de la ciudad, diseñado para quienes desean reconectar con la naturaleza y encontrar paz y tranquilidad.</p>
                        <p>Ubicada en un entorno privilegiado, nuestra finca ofrece un espacio único donde el aire puro, el canto de los pájaros y el verdor de los árboles se combinan para brindar una experiencia inigualable.</p>
                    </div>
                    <div class="image-container">
                        <img src="/images/abritaLugar1.png" alt="Imagen1 Abrita" class="about-us-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="our-mission">
            <div class="container">
                <h2>Nuestra Misión</h2>
                <div class="our-mission-content">
                    <p>En <strong>La Abrita</strong>, nos esforzamos por ofrecer un entorno acogedor donde las personas puedan disfrutar de la naturaleza, relajarse y participar en actividades que promuevan el bienestar y la armonía con el medio ambiente.</p>
                </div>
                <div class="image-container-mission">
                    <img src="/images/abritaLugar2.png" alt="Imagen Misión" class="our-mission-img">
                </div>
            </div>
        </section>

        <section class="our-values">
            <div class="container">
                <h2>Nuestros Valores</h2>
                <div class="our-values-content">
                    <ul>
                        <p><strong>Conexión con la Naturaleza:</strong> Fomentamos el respeto y la admiración por el entorno natural.</p>
                        <p><strong>Bienestar y Relajación:</strong> Buscamos brindar un espacio para el descanso y la tranquilidad.</p>
                        <p><strong>Sostenibilidad:</strong> Implementamos prácticas ecológicas para preservar nuestro entorno.</p>
                    </ul>
                </div>
                <div class="image-container-values">
                    <img src="/images/abritaImg1.png" alt="Imagen Valores" class="our-values-img">
                </div>
            </div>
        </section>
    </main>
</body>
</html>

<?php include 'includes/footer.php'; ?>

<script>
    window.addEventListener('scroll', function() {
        var cuadros = document.querySelectorAll('.cuadro-info1, .cuadro-info2, .cuadro-info3, .cuadro-info4');
        var screenHeight = window.innerHeight;
        cuadros.forEach(function(cuadro) {
            var position = cuadro.getBoundingClientRect().top;
            if (position < screenHeight - 100) {
                cuadro.classList.add('visible');
            }
        });
    });
</script>