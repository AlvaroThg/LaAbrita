<?php include 'includes/header.php'; ?>
<?php include 'includes/loading.php'; sleep(2); ?>

<main>
    <!-- Sección BANNER -->
    <section class="banner">
        <div class="banner-text" style="position: relative; left: 100px; top: 30px;">
        </div>
    </section>

    <!-- Contenedor principal -->
<div class="info-container">
    <!-- Cuadro de información -->
    <section class="info-box">
        <div class="info-text">
            <h2>¿Tienes un inmueble para vender o alquilar?</h2>
            <p>Envíanos un mensaje.</p>
            <a href="https://wa.link/ol55jn" class="cta-btn">Contáctanos</a>
        </div>
        <div class="info-image">
            <img src="images/imagenStock2.jpg" alt="Inmueble en venta">
        </div>
    </section>

    <!-- Botones de imagen con enlaces -->
    <div class="property-buttons">
        <a href="properties.php?category=departamentos" class="property-card">
            <h3>Departamentos</h3>
            <img src="images/departamento.jpg" alt="Departamentos">
            <p>10 Disponibles</p>
        </a>

        <a href="properties.php?category=casas" class="property-card">
            <h3>Casas</h3>
            <img src="images/casa.jpg" alt="Casas">
            <p>8 Disponibles</p>
        </a>

        <a href="properties.php?category=edificios" class="property-card">
            <h3>Edificios</h3>
            <img src="images/edificio.jpg" alt="Edificios">
            <p>5 Disponibles</p>
        </a>

        <a href="properties.php?category=terrenos" class="property-card">
            <h3>Terrenos</h3>
            <img src="images/terreno.jpg" alt="Terrenos">
            <p>13 Disponibles</p>
        </a>
    </div>
</div>
</main>
    
<?php include 'includes/footer.php'; ?>

<script>
    window.addEventListener('scroll', function() {
        var elementos = document.querySelectorAll('.info-container, .property-card, .info-box');
        var screenHeight = window.innerHeight;

        elementos.forEach(function(elemento) {
            var position = elemento.getBoundingClientRect().top;
            if (position < screenHeight - 100) {
                elemento.classList.add('visible');
            }
        });
    });
</script>

