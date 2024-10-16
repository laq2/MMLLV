<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta - Página de Información</title>
    <link rel="stylesheet" href="consulta.css">
    <!-- Fuente Garamond desde Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Garamond:wght@400;700&display=swap">
    <!-- Font Awesome para los iconos sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Encabezado principal -->
    <header>
        <h1>Consulta Información</h1>
    </header>

    <!-- Sección principal con formulario de consulta -->
    <main>
        <section class="consulta-section">
            <div class="consulta-form-container">
                <h2>Formulario de Consulta</h2>
                <form action="../MMLLV-main/Proyecto-fin-de-a-o-main/server/consultas-server.php" method="post">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit" class="zoom">Enviar Consulta</button>
                </form>
            </div>
        </section>
    </main>



</body>

<footer style="background-color: bisque; padding: 20px; text-align: center;">
    <p>&copy; 2024 veterinaria-Germon <div Veterinaria Germon=""></div>. Todos los derechos reservados.</p>
    <div style="margin: 10px 0;">
        <a href="https://www.facebook.com/tu-veterinaria" target="_blank" style="margin: 0 10px;">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="width: 30px; height: 30px;">
        
        </a>
        <a href="https://www.instagram.com/tu-veterinaria" target="_blank" style="margin: 0 10px;">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" style="width: 30px; height: 30px;">
        </a>
        <a href="https://www.youtube.com/tu-veterinaria" target="_blank" style="margin: 0 10px;">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733646.png" alt="YouTube" style="width: 30px; height: 30px;">
        </a>
        <a href="https://twitter.com/tu-veterinaria" target="_blank" style="margin: 0 10px;">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="width: 30px; height: 30px;">
        </a>
    </div>
    <p>Teléfono: (123) 456-7890 | Correo: info@veterinaria-Germon.com</p>
</footer>

</html>

