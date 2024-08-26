<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/contacto.css"/>
    <title>Document</title>
</head>
<body>
    <header class="container-nav">
        <?php include './includes/nav.php'?>
        <?php include './includes/logo.php'?>  
    </header>
    <main>
    <section class="contact">
        <p>Formulario de contacto</p>
        <form 
            action="https://formspree.io/f/mgvwepbp"
            method="POST"
        >
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="phone">Teléfono:</label>
        <input type="tel" id="phone" name="phone" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Enviar</button>
      </form>
        <p>Escribirnos al WhatsApp para una mejor comunicación</p>
        <div class="container-get-advice-now">
            <a class="get-advice-now" href="https://api.whatsapp.com/send?phone=543517725033&text=Hola%20me%20interesa%20obtener%20mas%20informaci%C3%B3n%20sobre" 
                target="_blank">
                Contactarnos por WhatsApp
            </a>
        </div>
    </section>
    </main>
    <?php include './includes/footer.php'?>
</body>
</html>