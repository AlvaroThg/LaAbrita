<?php
// Tiempo constante de 4 segundos
$loadingTime = 4;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <link rel="stylesheet" href="../css/styles-loading.css">
</head>
<body>
    <div class="loading-overlay">
        <div class="loading-content">
            <img src="/images/logo_simple.png" alt="Logo" class="loading-logo">
            <p class="loading-text">Tu Espacio. Tu Futuro</p>
        </div>
    </div>

    <script>
        // Ocultar la pantalla de carga después de 4 segundos
        setTimeout(function() {
            document.querySelector('.loading-overlay').style.display = 'none';
            document.body.style.overflow = 'auto'; // Restaurar el scroll
        }, <?php echo $loadingTime * 1000; ?>);
    </script>
</body>
</html>