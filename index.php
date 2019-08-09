<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="imagenes/favico.png">
        <link rel="stylesheet" href="css/index.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
		<link href="slider.css" rel="stylesheet">
        
        
        <title>Presidente Derqui</title>
    </head>
    <body>
        <?php
            include("header.php");
        ?>



    <main class="contenedor">
        <div class="seccion">
            <h1>VOLEY PRESIDENTE DERQUI</h1>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="imagenes/slider/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="imagenes/slider/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="imagenes/slider/3.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="wrapper">
            <div class="noticias">
                <a href="https://www.pilaradiario.com/laliga/2019/5/17/derqui-manda-bella-vista-sinergia-clsico-ante-unin-92787.html" target="_blank">
                    <p id="noticia">Derqui manda con Bella Vista y Sinergia fue clásico ante Unión</p>
                </a>
                        
                <img src="imagenes/noticia.jpg" alt="noticia">
            </div>
        </div>

        <div class="wrapper2">
            <div class="proximo">
                <img src="imagenes/proximo.png" alt="proximo">
                <p>Lugar:French y Chiclana <br>
                    Dia: 23/3 Hs: 21:30 
                </p>
            </div>
            <div class="resultado">
                <img src="imagenes/resultado.png" alt="resultado">
                <P>Local: 3 Visitante: 1 <br> <br>
                </P>
            </div>
            <div class="posicion">
                <p>Posiciones <br> <br>
                </p>
                <ul class="lista-posiciones">
                    <li>Superiores:
                        <ul class="submenu-posicion">
                            <li>
                                <a href="http://www.metrovoley.org.ar/t_.php?target=&target_2=Superiores&agrupado=177&reason=posiciones&nombre_agrupado=&cate=4&target_3=&categorias=Div.%20Superiores::Clasificaci%F3n::Tercera%20A::Caballeros" target="blank">Masculino</a>
                            </li>
                            <li>
                                <a href="http://www.metrovoley.org.ar/t_.php?target=&target_2=Superiores&agrupado=173&reason=posiciones&nombre_agrupado=&cate=6&target_3=&categorias=Div.%20Superiores::Clasificaci%F3n::Quinta%20B::Damas" target="blank">Femenino</a>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
    </main>    

        <?php
            include("footer.php");
        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
		
		<!-- Cargo mi archivo JS para activarlo -->
		<script src="slider.js"></script>
    </body>
</html>