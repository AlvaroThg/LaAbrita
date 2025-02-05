<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros - Zonoba</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-aboutUs.css">
</head>
<body>
    <main>
        <!-- Sección del carrusel -->
        <section class="banner" style="background-image: url('/images/banner.png');">
            <div class="banner-text">
                <h1>Descubre tu próximo hogar con Zonoba</h1>
            </div>
        </section>

         <!-- Sección cuadro-info1 -->
        <section class="cuadro-info1" id="cuadro-info1">
            <div class="cuadro-img">
                <img src="/images/property3.jpg" alt="Empresa">
            </div>
            <div class="cuadro-texto">
                <h3>Sobre Nosotros</h3>
                <p>En Zonoba Inmobiliaria, nos especializamos en convertir oportunidades en realidades, Con un enfoque innovador y transparente, ofrecemos soluciones integrales en la compra, venta y alquiler de propiedades, Nuestra prioridad es brindar a cada cliente un servicio personalizado, basado en confianza, profesionalismo y conocimiento del mercado, asegurando que cada inversión sea segura y rentable.</p>
            </div>
        </section>
        
        <!-- Sección cuadro-info2 -->
        <section class="cuadro-info2" id="cuadro-info2" style="display: flex; flex-direction: row-reverse; text-align: right;">
            <div class="cuadro-img">
                <img src="/images/property3.jpg" alt="Empresa">
            </div>
            <div class="cuadro-texto">
                <h3>Misión</h3>
                <p>Facilitar el acceso a propiedades ideales para cada persona, garantizando asesoramiento experto y procesos eficientes, nos esforzamos por ofrecer soluciones inmobiliarias innovadoras, seguras y adaptadas a las necesidades del mercado, siempre con un compromiso inquebrantable con la transparencia y la satisfacción del cliente.</p>
            </div>
        </section>
        
        <!-- Sección cuadro-info3 -->
        <section class="cuadro-info3" id="cuadro-info3">
            <div class="cuadro-img">
                <img src="/images/property3.jpg" alt="Empresa">
            </div>
            <div class="cuadro-texto">
                <h3>Visión</h3>
                <p>Ser la inmobiliaria líder en el sector, reconocida por nuestra integridad, eficiencia e innovación, aspiramos a transformar la experiencia de compra, venta y alquiler de bienes raíces, creando un impacto positivo en la vida de nuestros clientes y en el desarrollo del mercado inmobiliario.</p>
            </div>
        </section>
        
        <!-- Sección cuadro-info4 -->
        <section class="cuadro-info4" id="cuadro-info4" style="display: flex; flex-direction: row-reverse; text-align: right;">
                <div class="cuadro-img">
                    <img src="/images/property3.jpg" alt="Empresa">
                </div>
                <div class="cuadro-texto">
                    <h3>Compromiso</h3>
                    <p>En Zonoba Inmobiliaria, nuestro compromiso es brindar un servicio excepcional basado en honestidad, profesionalismo y atención personalizada. Nos dedicamos a generar confianza en cada transacción, asegurando procesos claros, ágiles y seguros para que nuestros clientes tomen decisiones con tranquilidad y respaldo total.</p>
                </div>
            </section>
        </main>

        <!-- Sección "Por qué elegirnos" -->
        <section class="why-choose-us">
            <h2>¿Por qué elegir Zonoba?</h2>
            <p>En Zonova nos comprometemos a ofrecerte la mejor experiencia para encontrar la propiedad ideal. Nos destacamos por:</p>
            <ul>
                <li>Atención personalizada con expertos en bienes raíces.</li>
                <li>Amplia variedad de propiedades disponibles.</li>
                <li>Soporte integral desde la búsqueda hasta el cierre de la compra o alquiler.</li>
            </ul>
        </section>

        <!-- Sección "Ofrecemos" -->
        <section class="what-we-offer">
            <h2>Ofrecemos</h2>
            <ul>
                <li>Asesoramiento personalizado para compra, venta y alquiler de propiedades.</li>
                <li>Conexión con los mejores agentes inmobiliarios del mercado.</li>
                <li>Plataforma digital intuitiva para simplificar tu búsqueda.</li>
            </ul>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>


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