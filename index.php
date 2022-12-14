<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SkyFly</title>
</head>

<body>
    <!--header-->
    <header>
        <!--header nombre empresa-->
        <div id="contenedorHeader">
            <div id="logo">
                <h3>Skyfly</h3>
            </div>
            <!--header Menu de navegacion-->
            <nav id="menu">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="./Iniciar sesion/index.php">Iniciar Sesion</a></li>
                    <li><a href="#acercade">Acerca de</a></li>
                    <li><a href="#contactos">Contacto</a></li>
                    <li><a href="#destinos">Destinos</a></li>
                    <li><a href="#">Mi cuenta</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h2 class="tituloNavegacion">Inicio</h2>
    <div id="contenedorSlider">

        <input type="radio" id="1" name="imagen-slide" hidden/>
        <input type="radio" id="2" name="imagen-slide" hidden/>
        <input type="radio" id="3" name="imagen-slide" hidden/>

        <div class="slider">

            <div class="elementoSlide">
                <img src="Recursos\IMG\vuelo.jpg" />
            </div>
            <div class="elementoSlide">
                <img src="Recursos/IMG/avion.jpg" />
            </div>
            <div class="elementoSlide">
                <img src="Recursos/IMG/asientos_avion.jpg" />

            </div>
        </div>
        <div class="pagina">

            <label class="elementoPagina" for="1">
    <img src="Recursos\IMG\vuelo.jpg" />
</label>
            <label class="elementoPagina" for="2">
    <img src="Recursos/IMG/avion.jpg" />
</label>
            <label class="elementoPagina" for="3">
    <img src="Recursos/IMG/asientos_avion.jpg" />
</label>
        </div>

    </div>


    <!--HEAD-->
    <h2 class="tituloNavegacion">Acerca De</h2>
    <section class="contenedor-contenido shadow borde">
        <img id="Imagen-acercade" src="Recursos\IMG\aircraft-g07a60cbb0_1920.jpg" alt="">
        <p id="contenido-acercade">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis numquam repudiandae dicta a tempora error, accusamus accusantium esse suscipit sit illo explicabo voluptatem sapiente adipisci maiores sint tenetur inventore!</p>
    </section>

    <h2 class="tituloNavegacion" id="contactos">Contacto</h2>
    <section class="contenedor-contenido shadow borde">
        <div id="contacto" class="contacto-borde">
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> 315 Happy Hollow Road, North Carolina
                    <li><i class="fa-solid fa-phone"></i> 898789890987
                        <li><i class="fa-solid fa-envelope"></i> skyfly@correo.com
            </ul>
        </div>
        <div id="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105919.42669630847!2d-118.54036593749998!3d33.941588900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b0d213b24fb5%3A0x77a87b57698badf1!2sAeropuerto%20Internacional%20de%20Los%20%C3%81ngeles!5e0!3m2!1ses!2scr!4v1659984930798!5m2!1ses!2scr"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>



    <h2 class="tituloNavegacion" id="destinos">Nuestros Destinos</h2>



    <main class="main">

        <section class="card-area">

            <!-- Card: City -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--city">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                               <g>
                                   <path d="M49.7,22c-1.1,0-2,0.9-2,2v32.2c0,1.1,0.9,2,2,2s2-0.9,2-2V24C51.7,22.9,50.8,22,49.7,22z"/>
                                   <path d="M13,29.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7
                                       V7.1h24.8v15.3c0,1.1,0.9,2,2,2s2-0.9,2-2V5.1c0-1.1-0.9-2-2-2H3.7c-1.1,0-2,0.9-2,2v51c0,1.1,0.9,2,2,2s2-0.9,2-2V36.5H13
                                       c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3H13z"/>
                                   <path d="M58,11.9c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0
                                       c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1-0.1-0.2-0.1
                                       c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0
                                       c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1l-12.6,7.8
                                       c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                       c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0v5.4H22.1
                                       c-1.1,0-2,0.9-2,2v28.9c0,1.1,0.9,2,2,2s2-0.9,2-2V29.3h17.3v26.9c0,1.1,0.9,2,2,2s2-0.9,2-2V21l8.6-5.3v40.5c0,1.1,0.9,2,2,2
                                       s2-0.9,2-2V12.1C58,12,58,12,58,11.9z"/>
                                   <path d="M28,31L28,31c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,31,28,31z"/>
                                   <path d="M33.5,31L33.5,31c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,31,33.5,31z"/>
                                   <path d="M28,36L28,36c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,36,28,36z"/>
                                   <path d="M33.5,36L33.5,36c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,36,33.5,36z"/>
                               </g>
                               </svg>

                                    <h2 class="card-front__heading">
                                        City break
                                    </h2>
                                    <p class="card-front__text-price">
                                        Desde $100
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--city">
                                        Ver m??s
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--city">
                                Las Vegas, United States
                            </h3>
                            <p class="inside-page__text">
                                Lo que pasa en Las Vegas, se queda en Las Vegas!
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--city">Comprar</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Beach -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--beach">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                               <path d="M57.2,28h-7.4c-0.4-4-2-7.7-4.4-10.6l3.2-3.2c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0l-3.2,3.2c-3-2.4-6.6-4-10.6-4.4V2.8
                                   c0-1.1-0.9-2-2-2s-2,0.9-2,2v7.4c-4,0.4-7.7,2-10.6,4.4l-3.2-3.2c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l3.2,3.2
                                   c-2.4,3-4,6.6-4.4,10.6H2.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h7.4c0.4,4,2,7.7,4.4,10.6l-3.2,3.2c-0.8,0.8-0.8,2,0,2.8
                                   c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6l3.2-3.2c3,2.4,6.6,4,10.6,4.4v7.4c0,1.1,0.9,2,2,2s2-0.9,2-2v-7.4c4-0.4,7.7-2,10.6-4.4
                                   l3.2,3.2c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.8-0.8,0.8-2,0-2.8l-3.2-3.2c2.4-3,4-6.6,4.4-10.6h7.4c1.1,0,2-0.9,2-2
                                   S58.3,28,57.2,28z M30,45.9c-8.8,0-15.9-7.2-15.9-15.9c0-8.8,7.2-15.9,15.9-15.9c8.8,0,15.9,7.2,15.9,15.9
                                   C45.9,38.8,38.8,45.9,30,45.9z"/>
                               </svg>

                                    <h2 class="card-front__heading">
                                        Beach time
                                    </h2>
                                    <p class="card-front__text-price">
                                        Desde $180
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--beach">
                                        Ver m??s
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="https://player.vimeo.com/external/332588783.sd.mp4?s=cab1817146dd72daa6346a1583cc1ec4d9e677c7&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--beach">
                                Tamarindo, Costa Rica
                            </h3>
                            <p class="inside-page__text">
                                Rel??jate bajo un hermoso atarcer en la playa!
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--beach">Comprar</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Camping -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--camping">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                               <path d="M57,52.1c0-0.4-0.1-0.7-0.3-1.1l-6.3-10.8L32.4,9l2.3-4c0.6-1,0.2-2.2-0.7-2.7c-1-0.6-2.2-0.2-2.7,0.7L30,5.2L28.7,3
                                   c-0.6-1-1.8-1.3-2.7-0.7c-1,0.6-1.3,1.8-0.7,2.7l2.3,4l-18,31.1L3.3,51C3.1,51.3,3,51.7,3,52.1c0,0.4,0.1,0.7,0.3,1
                                   c0.4,0.6,1,1,1.7,1h50c0.7,0,1.4-0.4,1.7-1C56.9,52.8,57,52.4,57,52.1z M34.7,49.8C34.2,50,32.1,50,30,50s-4.2,0-4.7-0.2
                                   c-0.2-0.5-0.2-2.1-0.2-3.6l0-4.3c0-2.7,2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9l0,4.3C34.9,47.7,34.9,49.3,34.7,49.8z M13.1,42.1L28,16.5
                                   v16.7c-3.9,0.9-6.9,4.4-6.9,8.6l0,4.3c0,1.7,0,2.9,0.2,4H8.5L13.1,42.1z M38.7,50.1c0.2-1,0.2-2.3,0.2-4l0-4.3
                                   c0-4.2-2.9-7.7-6.9-8.6V16.5l15,25.7l4.6,7.9H38.7z"/>
                               </svg>
                                    <h2 class="card-front__heading">
                                        Camping
                                    </h2>
                                    <p class="card-front__text-price">
                                        Desde $150
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--camping">
                                        Ver m??s
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="https://player.vimeo.com/external/180185916.sd.mp4?s=c893e4770f87b00e0d6b5a1de138b01b02aaa085&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--camping">
                                Parque Manuel Antonio, Costa Rica
                            </h3>
                            <p class="inside-page__text">
                                Explora la inre??ble la flora y fauna del Parque Nacional
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--camping">Comprar</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #5a90d7">
            <!-- Left -->
            <div class="me-5">
                <span>Mantente conectado con nosotros en redes sociales:</span>
            </div>
            <!-- Left -->

            <!--<<<<<<< HEAD-->
            <!-- Right -->
            <div>
                <a href="" class="text-white mr-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white mr-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white mr-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white mr-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white mr-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white mr-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>

        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">SkyFly</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #5a90d7; height: 2px" />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis numquam repudiandae dicta a tempora error, accusamus accusantium esse suscipit sit illo explicabo voluptatem sapiente adipisci maiores sint tenetur inventore!
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #5a90d7; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Inicio</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Acerca de</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Contacto</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Destinos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Mi cuenta</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contacto</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #5a90d7; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> 315 Happy Hollow Road, North Carolina</p>
                        <p><i class="fas fa-envelope mr-3"></i> skyfly@correo.com</p>
                        <p><i class="fas fa-phone mr-3"></i> 898789890987 </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            ?? 2022 Copyright:
            <a class="text-white">UFidelitas.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="proyecto.js"></script>
    <script src="https://kit.fontawesome.com/77233f7af8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>