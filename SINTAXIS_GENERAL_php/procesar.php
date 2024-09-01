<?php

  $capas =  extractGetParameterOfDefault("capa", "La capa no fue seleccionada");
  $colores = extractGetParameterOfDefault("color", "No selecciono colores");
  var_dump($colores);
  $validacionColores = validarElGetParameterYMostrar($colores);

  echo json_encode($_FILES);


  $files = json_encode($_FILES);

  if(isset($_FILES["avatar"]) &&
           $_FILES["avatar"]["error"] != 0 &&
           $_FILES["avatar"]["size"] > 0 &&
           $_FILES["avatar"]["type"] == "image\/png"){
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/" . $_FILES["avatar"]["name"]); //con esta funcion muevo el archivo temporal a una ruta local

      $nombreRuta = random_int(0,10000000) .  $_FILES["avatar"]["name"]; //le asigno un valor random al archivo para no pisarlo

      //arreglar el path dependiendo el directorio -IMPORTANTE-
    $rutaImagen = "img/" . $nombreRuta; //defino la ruta donde va a estar el archivo que subi mediante post
    echo "imagen subida correctamente";
  }
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario a Pantalla Completa</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .full-screen-form {
            height: 100vh; /* Ocupa toda la altura de la ventana */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            width: 100%;
            max-width: 600px; /* Ancho máximo del formulario */
        }
    </style>
</head>
<body>

<div class="w3-container full-screen-form">
    <div class="w3-card-4 form-container">
        <header class="w3-container w3-teal">
            <h1>Formulario de Contacto - Procesado</h1>
        </header>

        <div class="w3-container">
            <?php
            echo "Valores del POST" . json_encode($_POST); //json_encode()

            echo '<h2 class="w3-text-red ">Procesando valores:</h2>';

            function extractGetParameterOfDefault($param, $defaultValue) {
                //isset pregunta si el metodo GET en el espacio del array correspondiente a la clave que viaje en $param si tiene algun valor
                //si es asi, muestra, sino muestra el valor por default
                return isset($_POST[$param])? $_POST[$param] : $defaultValue;
            }

            function validarElGetParameterYMostrar($arrayDeDatos)
            {
                if(empty($arrayDeDatos) || is_string($arrayDeDatos)){
                   return "No hay datos seleccionados";
                }else{
                    mostrarResultadoDeArrayDeDatos($arrayDeDatos);
                }
            }
            //no estoy separando el php del html si imprimo en las funciones de php el codigo html
            function mostrarResultadoDeArrayDeDatos($arrayDeDatos)
            {
                foreach($arrayDeDatos as $dato){
                    echo '</br>'. $dato ;
                }
            }

            echo '<div class="w3-section">
                        <label for="name">Nombre:</label>
                        '. extractGetParameterOfDefault("name", "sin nombre").'
                    </div>
                    <div class="w3-section">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        '. extractGetParameterOfDefault("fecha_nacimiento", "sin fecha de nacimiento") .'
                    </div>
                    <div class="w3-section">
                        <label for="email">Email:</label>
                        '. extractGetParameterOfDefault("email", "sin email").'
                    </div>
                    <div class="w3-section">
                        <label for="superpoder">superpoder:</label>
                        '. extractGetParameterOfDefault("superpoder", "sin superpoder").'
                    </div>';
            echo    '<div class="w3-section">
                            <label for="message">Mensaje:</label>
                            '. extractGetParameterOfDefault("message", "sin mensaje").'
                     </div>';

            echo '<div class="w3-section">
                        <label for="paises">Pais:</label>';
                        //var_dump('soy var dump:'. $paises); // Muestra el tipo de dato y el valor
                        //print_r('soy print r:'.$paises);
                        $paises = extractGetParameterOfDefault("paises", []);
                        validarElGetParameterYMostrar($paises);

                   echo '</div>'

            ?>
            <div class="w3-section">
                <label for="capa">Capa:

                    <?php
                    echo $capas;
                    ?>
                </label>

            </div>
            <div class="w3-section">
                <label for="color">Colores:

                    <?php
                    echo $validacionColores;
                    ?>
                </label>

            </div>


            <!---
            <form
                action="procesar.php"
                method="get" class="w3-form">
                <div class="w3-row-padding">
                    <div class="w3-col s12 m6 l6">
                        <label for="name">Nombre:</label>
                        <input class="w3-input w3-border"
                               type="text" id="name" name="name" required>
                    </div>
                    <div class="w3-col s12 m6 l6">
                        <label for="name">Fecha de nacimiento:</label>
                        <input class="w3-input w3-border"
                               type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                    <div class="w3-col s12 m6 l6">
                        <label for="email">Correo Electrónico:</label>
                        <input class="w3-input w3-border"
                               type="email" id="email" name="email" required>
                    </div>
                    <div class="w3-col s12 m6 l6">
                        <label for="superpoder">Superpoder Deseado:</label>
                        <select id="superpoder" name="superpoder" class="w3-select w3-border">
                            <option value="" disabled selected>Selecciona un superpoder</option>
                            <option value="volar">Volar</option>
                            <option value="invisibilidad">Invisibilidad</option>
                            <option value="fuerza">Fuerza sobrehumana</option>
                            <option value="teletransportacion">Teletransportación</option>
                        </select>
                    </div>

                    <div class="w3-col s12 m6 l12">
                        <label for="paises">Países donde operar:</label>
                        <select id="paises" name="paises" class="w3-select w3-border" multiple>
                            <option value="argentina">Argentina</option>
                            <option value="mexico">México</option>
                            <option value="españa">España</option>
                            <option value="colombia">Colombia</option>
                        </select>

                    </div>

                </div>
                <div class="w3-row-padding">
                    <div class="w3-col s12">
                        <label for="message">Mensaje:</label>
                        <textarea class="w3-input w3-border" id="message" name="message" rows="4" required></textarea>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col s12">
                        <button class="w3-button w3-teal w3-right w3-margin" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
            -->
        </div>
    </div>
</div>

</body>
</html>

