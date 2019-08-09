<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="imagenes/favico.png">
    <link rel="stylesheet" href="css/multimedia.css">
    <title>Multimedia</title>
</head>
    <body>
        <?php
            include("header.php");
        ?>
        <main class="contenedor">
            <div class="seccion">
                <h1>GALERÍA IMÁGENES</h1>
            </div>
            <div class="imagenes">
                <ul class="galeria">
                    <?php
                        $directorio = dir("imagenes/multimedia");
                        while(($imagen = $directorio->read())!==false ):?>
                            <?php if(preg_match('/jpg/',$imagen) || preg_match('/jpeg/',$imagen) ):?>    
                                <li><img class="imagen_galeria" src='imagenes/multimedia/<?php echo$imagen;?>'></li>;
                        <?php endif; ?>   
                        <?php endwhile; ?>
                </ul>
            </div>
            <div class="cont-visor" id="cont-visor">
                <div class="visor">
                    <a class="boton atras"> < </a>      
                    <img  id="imagen" src="">
                    <a class="boton adelante"> > </a>
                </div>
                <a class="cerrar" id="cerrar"> X </a>
            </div>
        </main>
        
        <?php
            include("footer.php");
        ?>

        <script src="galeria.js"></script>

    </body>
</html>