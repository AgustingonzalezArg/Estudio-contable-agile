<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/styles/footer.css">
    <title>Footer</title>
</head>
<body>
    <footer>
        <p>&copy; 2024 Estudio Contable Agile. Todos los derechos reservados.</p>
        <nav class="nav-footer" aria-label="Enlaces de pie de página">
            <ul>
                <li><a href="<?php echo $base_url; ?>/politica-de-privacidad.php" title="Leer nuestra política de privacidad">Política de Privacidad</a></li>
                <li><a href="<?php echo $base_url; ?>/terminos-y-condiciones.php" title="Leer nuestros términos y condiciones">Términos y Condiciones</a></li>
                <li><a href="<?php echo $base_url; ?>/contacto.php" title="Contáctenos">Contacto</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>