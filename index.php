
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
            <h1>Formulario de Contacto</h1>
        </header>

        <div class="w3-container">
            <form action="procesar.php" method="get" class="w3-form">
                <div class="w3-row-padding">
                    <div class="w3-col s12 m6 l6">
                        <label for="name">Nombre:</label>
                        <input class="w3-input w3-border" type="text" id="name" name="name" required>
                    </div>
                    <div class="w3-col s12 m6 l6">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input class="w3-input w3-border" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                    <div class="w3-col s12 m6 l6">
                        <label for="email">Correo Electrónico:</label>
                        <input class="w3-input w3-border" type="email" id="email" name="email" required>
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
                        <select id="paises" name="paises[]" class="w3-select w3-border" multiple>
                            <option value="argentina">Argentina</option>
                            <option value="mexico">México</option>
                            <option value="belgica">Belgica</option>
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
        </div>
    </div>
</div>

</body>
</html>


<?php



?>