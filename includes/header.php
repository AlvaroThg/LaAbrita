<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Abrita: Rutas hacia tu interior</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .leaf {
            position: absolute;
            top: -50px;
            width: 20px;
            height: 20px;
            background-color: green;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            opacity: 0.8;
            animation: fall linear infinite;
        }
        
        @keyframes fall {
            from {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            to {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            for (let i = 0; i < 20; i++) {
                let leaf = document.createElement("div");
                leaf.classList.add("leaf");
                leaf.style.left = Math.random() * window.innerWidth + "px";
                leaf.style.animationDuration = (Math.random() * 3 + 2) + "s";
                document.body.appendChild(leaf);
            }
        });
    </script>
    
    <header>
        <div class="header-image">
            <div class="overlay"></div>
            <div class="header-content">
                <img src="../images/logoAbritaCentradoSINLUNA.png" alt="La Abrita" class="logo">
                <img src="../images/arbitaLuna.png" alt="Luna" class="luna">
                <nav class="nav-links-container">
                    <ul class="nav-links">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../about.php">Sobre Nosotros</a></li>
                        <li><a href="../content.php">Galería</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>
