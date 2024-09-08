<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS5BVKTR');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/blanqueo-de-capitales.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Blanqueo de Capitales</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS5BVKTR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
    <a href="https://www.estudioagile.com" class="logo"><img src="<?php echo $base_url; ?>/assets/logo/logoTransparente.webp" alt="Logo de Estudio Contable Agile"></a>
    </header>

    <main>
        <section class="default-view">
        <h1>Blanqueamos tu dinero, sin tener que invertirlo</h1>
        <div class="container-default-view">
            <div class="container-benefit">
                <h2>Te asesoramos en Blanqueo de:</h2>
                    <div class="container-ul">
                        <ul>
                            <li>Efectivo</li>
                            <li>Bienes Muebles e Inmuebles</li>
                            <li>Cryptomonedas</li>
                            <li>Dinero en el Exterior</li>
                        </ul>
                    </div>
                </div>
                <div class="container-form">
                    <form
                    id="form"
                    action="https://formspree.io/f/movabkyp"
                    method="POST"
                    >
                    <h3>Nosotros te contactamos</h3>
                    <label for="">Su Nombre</label>
                    <input type="text" name="name" id="name" require>
                    <label for="">Su mail</label>
                    <input type="email" name="email" id="email" require>
                    <label for="">Numero de teléfono (10 Carateres)</label>
                    <input type="number" name="number">
                    <input type="submit" value="Enviar">
                    </form>
                </div>
        </div>
        <div class="container-a">
            <a href="https://api.whatsapp.com/send?phone=543517725033&text=Hola%20me%20interesa%20obtener%20mas%20información%20sobre%20el%20blanqueo%20de%20capitales">Contactanos al WhatsApp</a>
        </div>

            <h2>Beneficios de Blanquear tu dinero con nosotros:</h2>
            <div class="container-ul">
                <ul>
                    <li>Tenes tu dinero disponible al instante.</li>
                    <li>Podes gastarlo o invertirlo como quieras.</li>
                    <li>Evitas futuros problemas con la AFIP.</li>
                    <li>Nadie te dice como invertir tu dinero.</li>
                </ul>
            </div>
        </section>
        <section class="our-process">
            <h2>Nuestro Proceso</h2> 
            <div class="container-card">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <p>1.</p>
                            <h3>Analisis del Cliente</h3>
                        </div>
                        <div class="card-back">
                            <p>Analizamos la situacion en la que se encuentra el cliente y si es posible realizar el blanqueo de forma segura.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <p>2.</p>
                            <h3>Asesoría con la Especialista</h3>
                        </div>
                        <div class="card-back">
                            <p>Una vez analizada la situacion del cliente y sabiendo que es posible realizar el blanqueo, se realiza una asesoria con la especialista para definir como se va a trabajar, que conviene blanquear y que no.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <p>3.</p>
                            <h3>Realización del Blanqueo</h3>
                        </div>
                        <div class="card-back">
                            <p>Luego de haber definido el camino de que se va a blanquear, que no y cual va a ser el proceso, se inicia todo el tramite para poder finalizar el proceso.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="dev-de-clientes" class="social-prof">
        <div  id="clientes-satisfechos" class="clientes">
            <h2>Que dicen nuestros clientes</h2>
            <div class="gallery">
                <div class="gallery-slider">
                    <div class="gallery-item"><img src="./assets/chat-clients/1.webp" alt="Imagen client 1"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/2.webp" alt="Imagen client 2"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/3.webp" alt="Imagen client 3"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/4.webp" alt="Imagen client 4"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/5.webp" alt="Imagen client 5"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/6.webp" alt="Imagen client 6"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/7.webp" alt="Imagen client 7"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/8.webp" alt="Imagen client 8"></div>
                    <div class="gallery-item"><img src="./assets/chat-clients/9.webp" alt="Imagen client 9"></div>
                </div>
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </div>
        <div class="container-a">
            <a href="https://api.whatsapp.com/send?phone=543517725033&text=Hola%20me%20interesa%20obtener%20mas%20información%20sobre%20el%20blanqueo%20de%20capitales">Contactanos al WhatsApp</a>
        </div>
    </section>
    <section class="faq">
        <h2>Preguntas Frecuentes</h2>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question"> <h3>¿Cuanto demora el blanqueo?</h3></div>
                <div class="faq-answer">
                    <p>A completar</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question"><h3>¿Qué es una cuenta CERA?</h3></div>
                <div class="faq-answer"> 
                    <p>A completar</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question"><h3>¿Tengo que pagar algo por blanquear mi dinero?</h3></div>
                <div class="faq-answer"> 
                    <p>A completar</p>
                </div>
            </div>
        </div>
        <div class="container-a">
            <a href="https://api.whatsapp.com/send?phone=543517725033&text=Hola%20me%20interesa%20obtener%20mas%20información%20sobre%20el%20blanqueo%20de%20capitales">Contactanos al WhatsApp</a>
        </div>
    </section>
    <section>
        
    </section>
    <?php include('./includes/whatsappBtn.php')?>  
</main>
<?php include './includes/footer.php'?>
</body>
<script>
    const sliders = document.querySelectorAll('.gallery-slider');
    const faqItems = document.querySelectorAll('.faq-item');

    sliders.forEach((slider, index) => {
        let currentIndex = 0;
        const prevBtn = slider.parentElement.querySelector('.prev');
        const nextBtn = slider.parentElement.querySelector('.next');
    
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    });
    
    nextBtn.addEventListener('click', () => {
        if (currentIndex < slider.children.length - 1) {
            currentIndex++;
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    });
});

faqItems.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
    });
});

</script>

</html>