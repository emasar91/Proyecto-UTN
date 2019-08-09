<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="imagenes/favico.png">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Contacto</title>
</head>
    <body>

        <?php
            include("header.php");
        ?>
        <main class="wrapper">
            <div class="seccion">
                <h1>CONTACTO</h1>            
            </div>
            <div class="formulario">
                <div class="informacion">
                    <div class="direccion">
                        <h3>Dirección</h3>
                        <p>Dorrego Manuel 866, B1635 Pres. Derqui, Buenos Aires</p>
                    </div>
                    <div class="telefono">
                        <h3>Telefono</h3>
                        <p>0230 448-3934</p>
                    </div>
                    <div class="email">
                        <h3>Email</h3>
                        <p>derquivoley@gmail.com</p>
                    </div>   
                </div>
                <div class="mensaje">
                    <h2>Contáctanos</h2>
                    <form>
                        <label for="nombre"> Nombre*.</label>
                        <input type="text" class="nombre" required>
                        <label for="email">Email*.</label>  
                        <input type="email" class="email" required>
                        <label for="asunto">Asunto*.</label>
                        <input type="text" class="asunto" required>
                        <label for="mensaje">Mensaje*.</label> 
                        <textarea name="mensaje" class="mensaje" required></textarea>
                        <input type="submit" value="Enviar" class="enviar">
                    </form>
                </div>
            </div>
        </main>

        <?php
        include("footer.php");
        ?>
        
    </body>
</html>
