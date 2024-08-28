<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamiento de Citas</title>
    <link rel="stylesheet"  href="style.css">
</head>

<body>
<nav>
        <a href="#"> Inicio</a>
        <a href="#"> Reseñas</a>
        <a href="#"> Galeria</a>
        <a href="#"><img src="1000946.png" style="width: 40px; height: 40px;"/></a>
    </nav>
    <header>
        <img src="images6.png" alt=" banner uñas" class="banner"  />
        <h1>Agendamiento de citas</h1>
    </header>

    <div class="container">
<form action="conexion.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required="">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required="">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required="">

            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular" required="">

            <label for="fecha">Fecha de la cita:</label>
            <input type="date" id="fecha" name="fecha" required="">

            <label class="hora" for="Hora"> Hora de la cita</label>
            <input type="time" id="hora" name="hora" required="">

            <button type="submit">Agendar Cita</button>
        </form> 
</form>

</body>
</html>
