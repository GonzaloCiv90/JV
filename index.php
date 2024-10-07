<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JV Climatización</title>
    <link rel="icon" href="assets/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css" />
    <style>
        /* Personalización del botón hamburguesa */
        .navbar-toggler {
            border-color: transparent;
            /* Quitar el borde del botón */
        }

        .navbar-toggler-icon {
            background-image: none;
            /* Eliminar el icono por defecto */
        }

        /* Diseño personalizado para el botón */
        .navbar-toggler-icon::before {
            content: '\2630';
            /* Símbolo de hamburguesa */
            font-size: 1.5rem;
            /* Tamaño del símbolo */
            color: #fff;
            /* Color del símbolo */
        }

        /* Fondo personalizado del botón cuando está colapsado */
        .navbar-toggler {
            background-color: #007bff;
            /* Color de fondo personalizado */
            border-radius: 5px;
            /* Bordes redondeados */
        }

        /* Cambiar el color del botón al pasar el mouse */
        .navbar-toggler:hover {
            background-color: #0056b3;
            /* Fondo más oscuro al hacer hover */
        }
    </style>
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#">
                        <img src="assets/LOGO_JV_BLANCO_SIN_FONDO_.png" alt="Logo JV" width="40" height="auto">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#info-section">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#serv-section">Nuestros servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#contac-section">Contactos</a>
                        </li>
                        <div class="ms-lg-auto d-flex align-items-center">
                            <a href="https://www.facebook.com/jvclimatizacion/?locale=es_LA" class="text-white me-3" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/jv_refrigeracion_/?igsh=MXYzYWNsd2MwOWFzbg%3D%3D" class="text-white me-3" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-white me-3" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://wa.me/5493513413411" target="_blank" class="text-white me-3"><i class="bi bi-whatsapp"></i></a>
                        </div>
                        <div class="d-flex align-items-center google-map-link">
                            <a href="https://www.google.com/maps/place/JV+Refrigeraci%C3%B3n/@-31.4002867,-64.2424835,14.5z/data=!4m6!3m5!1s0x9432998f067e24d9:0x835ad28674ce15c7!8m2!3d-31.3981294!4d-64.2417874!16s%2Fg%2F11qr6l7ghb?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D"
                                class=" map nav-link text-light" target="_blank">
                                <i class="fa-solid fa-location-dot"></i> Quebracho Herrado 11, Córdoba
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="carousel-section">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/carousel1.jpg" class="d-block w-100" alt="Uniforme de trabajo">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/carousel2.jpg" class="d-block w-100" alt="condensador aire acondicionado">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/carousel3.jpg" class="d-block w-100" alt="aire acondicionado central">
                    </div>
                </div>
            </div>
            <div class="overlay">
                <section class="text-white d-flex flex-column justify-content-center align-items-center h-100 ps-2">
                    <h1>Servicios de Climatización<br>Instalación Profesional de Aires Acondicionados para Hogar e Industria </h1>
                    <div class="mt-3">
                        <a href="#contac-section" class="btn btn-primary">Contáctanos</a>
                    </div>
                </section>
            </div>
        </section>
        <section id="info-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>Sobre nosotros</h2>
                        <p>¿Quiénes Somos?</p>
                        <p>Somos una empresa dedicada a brindar soluciones innovadoras en el sector de la climatización. Nuestro equipo está formado por profesionales expertos en la instalación de aires acondicionados tanto para hogares como para industrias. Nuestro compromiso es ofrecer un servicio de calidad y adaptado a las necesidades de cada cliente.</p>
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <a href="#contac-section" class=" btn btn-primary mt-4">Contáctanos</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <img src="assets/LOGO_JV_AZUL_SIN_FONDO_.png" alt="Imagen de la empresa" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="serv-section">
            <div class="container">
                <h2>Nuestros servicios</h2>
                <p>¡Siempre listos!</p>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card bg-primary h-100" style="--bs-bg-opacity: .95;">
                            <img src=" assets/card residencial.jpg" class="card-img-top w-100 img-fluid" alt="aire acondicionado residencial">
                            <div class="card-body">
                                <img src="assets/AA_RESIDENCIAL.png" width="50" height="auto">
                                <h2 class="card-title mt-2">Residencial</h2>
                                <p class="card-text">MULTISPLIT INVERTER.<br>SPLITS FRÍO / CALOR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-primary h-100" style="--bs-bg-opacity: .95;">
                            <img src=" assets/card industrial.jpg" class="card-img-top w-100 img-fluid" alt="Imagemn de servicio industrial">
                            <div class="card-body">
                                <img src="assets/AA_INDUSTRIAL.png" width="50" height="auto">
                                <h2 class="card-title mt-2">Industrial</h2>
                                <p class="card-text">Piso Techo<br>Baja silueta<br>Cassette</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-primary h-100" style="--bs-bg-opacity: .95;">
                            <img src=" assets/card comercial.jpg" class="card-img-top w-100 img-fluid" alt="Imagenb servicio comercial">
                            <div class="card-body">
                                <img src="assets/AA_COMERCIAL.png" width="50" height="auto">
                                <h2 class="card-title mt-2">Comercial</h2>
                                <p class="card-text">Piso Techo<br>Baja silueta<br>Cassette</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-primary h-100" style="--bs-bg-opacity: .95;">
                            <img src=" assets/card camara.jpg" class="card-img-top" alt="Cámara frigorífica">
                            <div class="card-body">
                                <img src="assets/CAMARA FRIGORIFICA.png" width="50" height="auto">
                                <h2 class="card-title mt-2">Cámara Frigorífica</h2>
                                <p class="card-text">Instalación, service y mantenimiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center text-center">
                    <div class="col">
                        <i class="bi bi-thermometer-snow"></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-lightning"></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-fan"></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-thermometer-sun"></i>
                    </div>
                </div>
            </div>
        </section>
        <section id="contac-section" class="pb-5">
            <div class="container">
                <h2 class="mb-4">Contáctanos</h2>
                <div class="row">
                    <!-- Columna para el formulario -->
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="subject" placeholder="Asunto del mensaje" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Escribe tu mensaje" required></textarea>
                            </div>

                            <!-- reCAPTCHA widget -->
                            <div class="g-recaptcha mb-4" data-sitekey="6LckMlcqAAAAABW1qK86OHdN7_D6wn1E0my_qk-h"></div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary mb-4">Enviar mensaje</button>
                            </div>
                        </form>
                        <div class="mb-3">
                            <!-- Script de reCAPTCHA -->
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        </div>
                    </div>
                    <!-- Columna para el mapa -->
                    <div class="col-md-6">
                        <p><i class="fa-solid fa-location-dot"></i> Quebracho Herrado 11, Córdoba</p>
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d218008.87345929022!2d-64.29588313518705!3d-31.375845533211198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x9432998f067e24d9%3A0x835ad28674ce15c7!2sjv%20refrigeracion!3m2!1d-31.3981294!2d-64.24178739999999!5e0!3m2!1ses!2sar!4v1728304215918!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="https://wa.me/5493513413411" class="whatsapp-float" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
        <a href="tel:+5493513413411" class="phone-float">
            <i class="bi bi-telephone-fill"></i>
        </a>

    </main>

    <footer class="text-white pt-5 bg-primary p-2" style="--bs-bg-opacity: .95;">
        <div class="container text-center">
            <div class="row justify-content-between">
                <!-- Sección de información de la empresa -->
                <div class="col-md-auto mb-4">
                    <img src="assets/LOGO_JV_BLANCO_SIN_FONDO_.png" alt="Logo de JV" width="75" height="auto">
                </div>
                <!-- Sección de redes sociales -->
                <div class="col-md-auto d-flex justify-content-center align-items-center">
                    <a href="https://www.facebook.com/jvclimatizacion/?locale=es_LA" class="text-white me-3" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/jv_refrigeracion_?igsh=M2RiZjYza2IzczBj" class="text-white me-3" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white me-3" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://wa.me/5493513413411" target="_blank" class="text-white me-3"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <!-- Fila para derechos reservados -->
            <div class="row mt-3">
                <div class="col text-center">
                    <p>&copy; 2024 JV Climatización. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navLinks = document.querySelectorAll(".navbar-nav a");
            var navCollapse = document.querySelector(".navbar-collapse");

            navLinks.forEach(function(link) {
                link.addEventListener("click", function() {
                    if (navCollapse.classList.contains("show")) {
                        document.querySelector(".navbar-toggler").click();
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>