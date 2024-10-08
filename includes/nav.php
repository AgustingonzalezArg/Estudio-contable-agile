<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/styles/nav.css">
    <title>Navegacion Principal</title>
</head>
<body>
    <nav aria-label="Navegacion Principal del sitio" class="nav-header close">
        <ul class="nav-header__ul">
            <li><a href="<?php echo $base_url; ?>/index.php" title="Ir a la pagina de Inicio">Inicio</a></li>
            <li><a href="<?php echo $base_url; ?>/servicios.php" title="Nuestros serivicos contables e impositivos">Servicios</a></li>
            <li><a href="<?php echo $base_url; ?>/servicios/monotributo.php" title="Información sobre monotributo y nuestros serivicios especializados para ellos">Monotributo</a></li>
            <li><a href="<?php echo $base_url; ?>/servicios/responsable-inscripto.php" title="Información sobre responsables Inscriptos y nuestros serivicios especializados para ellos">Responsables Inscriptos</a></li>
            <li><a href="<?php echo $base_url; ?>/contacto.php" title="Pagina de contacto">Contacto</a></li>

        </ul>
        <button class="btn-open">☰</button>
        <button class="btn-close">X</button>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('.nav-header');
            const btnOpen = document.querySelector('.btn-open');
            const btnClose = document.querySelector('.btn-close');

            btnOpen.addEventListener('click', function() {
                nav.classList.remove('close');
                nav.classList.add('open');
            });

            btnClose.addEventListener('click', function() {
                nav.classList.remove('open');
                nav.classList.add('close');
            });
        });
    </script>
</body>
</html>