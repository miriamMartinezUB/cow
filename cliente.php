<?php
$today = date("Y-m-d");
if(isset($_POST['checkIn'])) {
    $checkInDate = $_POST['checkIn'];
    $checkOutMinDate = date('Y-m-d', strtotime($checkInDate . ' +1 day'));
} else {
    $checkOutMinDate = date('Y-m-d', strtotime('+1 day'));
}
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Alojamientos.com</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-y: auto; overflow-x: hidden;">
<nav class="navbar navbar-light" style="background-color: darkblue; color: whitesmoke">
    <div class="container-fluid p-5 mx-5">
        <h3>Alojamientos.com</h3>
        <form class="d-flex">
            <button class="btn btn-outline-light mr-2" type="submit">Registrate</button>
            <button class="btn btn-outline-light" type="submit">Inicia sesión</button>
        </form>
    </div>
    <div class="pl-5 pb-5 mx-5">
        <h2 >Somos un Planificador de viajes rápido y sencillo.</h2>
        <p class="font-weight-light " style="opacity: 0.6">Encuentra los mejores alojamientos allí donde vayas.</p>
    </div>
</nav>
<div class="d-flex m-5">
    <div class="flex-grow-1 mr-3">
        <form class="form-group" action="servidor.php" method="post">
            <h3>¿Cual es tu proximo destino?</h3>
            <input class="form-control form-control-sm my-3" type="text" name="location" id="location" value="" placeholder="Ibiza">
            <div class="d-flex">
                <p class="mr-1" style="white-space: nowrap;">Check-in:</p>
                <input class="form-control form-control-sm" type="date" name="checkIn" id="checkIn" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="d-flex">
                <p class="mr-1" style="white-space: nowrap;">Check-out:</p>
                <input class="form-control form-control-sm" type="date" name="checkOut" id="checkOut" value="<?php echo isset($_POST['checkIn']) ? date('Y-m-d', strtotime($_POST['checkIn'] . ' +1 day')) : date('Y-m-d', strtotime('+1 day')); ?>">
            </div>
            <div class="d-flex">
                <p class="mr-1" style="white-space: nowrap;">Personas:</p>
                <input class="form-control form-control-sm" type="number" name="people" id="people" value="" min="1">
            </div>
            <div class="d-flex">
                <p class="mr-1" style="white-space: nowrap;">DNI:</p>
                <input class="form-control form-control-sm" type="text" name="dni" id="dni" placeholder="12345678X">
            </div>
            <button type="submit" class="btn btn-primary btn-sm" style="color: whitesmoke; background-color: blue">Reservar</button>
        </form>
        <hr class="solid">
        <form action="http://www.google.com/search" metdod="get">
            <h3>Encuentra más información por internet</h3>
            <p>¿Donde te gustaria ir?</p>
            <div class="input-group-prepend w-auto">
                <input name="q" type="text" class="form-control form-control-sm mr-2">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-sm" style="color: whitesmoke; background-color: blue">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="border-left mx-3"></div>
    <div class="flex-grow-1">
        <div class="container">
            <h1 class="mb-3">Tus búsquedas recientes</h1>
            <div class="overflow-auto position-relative">
                <div class="d-flex">
                    <div class="mr-4">
                        <img class="rounded mb-2" height="200" width="300" src="img/hotel_1.jpeg">
                        <h4>Hotel 1</h4>
                    </div>
                    <div class="mr-4">
                        <img class="rounded mb-2" height="200" width="300" src="img/hotel_2.jpeg">
                        <h4>Hotel 2</h4>
                    </div>
                    <div class="mr-4">
                        <img class="rounded mb-2" height="200" width="300" src="img/hotel_3.jpeg">
                        <h4>Hotel 3</h4>
                    </div>
                    <div class="mr-5">
                        <img class="rounded mb-2" height="200" width="300" src="img/hotel_4.jpeg">
                        <h4>Hotel 4</h4>
                    </div>
                </div>
            </div>
            <h1 class="mt-4 mb-3">Destinos de moda</h1>
            <table class="table table-bordered">
                <tr>
                    <th><h4>Regiones</h4></th>
                    <th><h4>Ciudades</h4></th>
                    <th><h4>Lugares de interés</h4></th>
                </tr>
                <tr>
                    <td>
                        <h5>Fuerteventura</h5>
                        <p>2.913 alojamientos</p>
                    </td>
                    <td>
                        <h5>La Seu d'Urgell, España</h5>
                        <p>20 alquileres vacacionales, 3 cabañas y casas de campo</p>
                    </td>
                    <td>
                        <a href="https://es.wikipedia.org/wiki/Walt_Disney_World_Resort">Walt Disney World Resort</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Formentera</h5>
                        <p>399 alojamientos</p>
                    </td>
                    <td>
                        <h5>Besalú, España</h5>
                        <p>28 alquileres vacacionales, 8 cabañas y casas de campo</p>
                    </td>
                    <td><a href="https://es.wikipedia.org/wiki/Torre_Sevilla">Torre Sevilla</a></td>
                </tr>
                <tr>
                    <td>
                        <h5>Tenerife</h5>
                        <p>6.807 alojamientos</p>
                    </td>
                    <td>
                        <h5>Pont de Suert, España</h5>
                        <p>10 alquileres vacacionales</p>
                    </td>
                    <td><a href="https://es.wikipedia.org/wiki/Torre_Eiffel">Torre Eiffel, París</a></td>
                </tr>
                <tr>
                    <td>
                        <h5>Galicia</h5>
                        <p>6.553 alojamientos</p>
                    </td>
                    <td>
                        <h5>Buenos Aires</h5>
                        <p>5134 hoteles</p>
                    </td>
                    <td><a href="https://es.wikipedia.org/wiki/Salto_del_Laja">Salto del Laja</a></td>
                </tr>
                <tr>
                    <td>
                        <h5>Asturias</h5>
                        <p>3.311 alojamientos</p>
                    </td>
                    <td>
                        <h5>Pont de Suert, España</h5>
                        <p>10 alquileres vacacionales</p>
                    </td>
                    <td><a href="https://es.wikipedia.org/wiki/PortAventura_World">PortAventura World</a></td>
                </tr>
                <tr>
                    <td>
                        <h5>Gran Canarias</h5>
                        <p>5.972 alojamientos</p>
                    </td>
                    <td>
                        <h5>Espot, España</h5>
                        <p>21 alquileres vacacionales, 3 cabañas y casas de campo</p>
                    </td>
                    <td><a href="https://es.wikipedia.org/wiki/Cataratas_del_Iguaz%C3%BA">Cataratas del Iguazú</a></td>
                </tr>
                <tr>
                    <td>
                        <h5>Bora Bora</h5>
                        <p>59 alojamientos</p>
                    </td>
                    <td>
                        <h5>Puigcerdà, España</h5>
                        <p>63 alquileres vacacionales, 14 cabañas y casas de campo</p>
                    </td>
                    <td><a href="https://es.wikipedia.org/wiki/Playa_de_la_Barrosa">Playa de la Barrosa</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<footer class="position-relative w-100 text-center p-5" style="background-color: #081134; color: whitesmoke">
        <p style="font-size: 16px; font-weight: 300">¡Ahorra tiempo!</p>
        <p class="font-weight-lighter" style="opacity: 0.6">Registrate para recibir las mejores ofertas</p>
        <div class="input-group-prepend w-50 mx-auto">
            <input id="email" placeholder="Email" type="text" class="form-control mr-2">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary" style="color: whitesmoke; background-color: blue">Subscríbete</button>
            </div>
        </div>
    </footer>
</body>
</html>

