<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="imagenes/favico.png">
    <link rel="stylesheet" href="css/jugadores.css">
    <title>Jugadores</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    
    <main class="contenedor">
        <div class="seccion">
            <h1>JUGADORES</h1>
        </div>

        <div class="cartas">
                
            <?php for($i=1;$i<=7;$i++):?>
            <div class="carta" id=>
                <div class="cara cara1">
                    <div class="contenido">
                        <h2>Nombre</h2>
                        <p>
                            Lorem Ipsum fact that a reader will be distracted by the readable content of a page when 
                            looking at
                        </p>

                    </div>
                </div>
                <div class="cara cara2">
                    <img src="imagenes/jugadores/<?php echo $i;?>.jpg" alt=" jugador <?php echo $i;?>">
                </div>
            </div>
            <?php endfor;?>

        </div>
    </main>


    <?php
            include("footer.php");
    ?>

</body>
</html>