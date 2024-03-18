<?php
	$location = $_POST['location'];
	$checkIn = $_POST['checkIn'];
	$checkOut = $_POST['checkOut'];
	$people = $_POST['huespedes'];
	$dni = $_POST['dni'];
	$error = FALSE;

	if(!preg_match('/^[a-zA-Z\s]+$/', $location)){
		$error = TRUE;
	}

	if(!preg_match('/^[1-9]*$/',$people)){
		$error = TRUE;
	}
	if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$checkIn)) {
    	$error = TRUE;
	}
	if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$checkOut)) {
    	$error = TRUE;
	}
	if (!preg_match('/[0-9]{7,8}[A-Z]/', $dni)) {
    	$error = TRUE;
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
<div class="d-flex justify-content-center align-items-center m-5"">
        <div class="card" >
            <?php
            if ($error == TRUE) {
                echo '<img src="img/error.png" class="card-img-top" height="320px">';
            }
            if ($error == FALSE) {
                echo '<img src="img/hotel_3.jpeg" class="card-img-top">';
            }
            ?>
            <div class="card-body">
                <?php
                if ($error == TRUE) {
                    echo '<h5 class="card-title">Error al intentar revervar</h5>';
                    if (empty($location)) {
                        echo '<p class="card-text">El campo de destino es obligatorio</p>';
                    }else if(!preg_match('/^[a-zA-Z\s]+$/', $location)){
                        echo '<p class="card-text">El campo de destino solo admite letras y espacios</p>';
                    }
                    if (empty($checkIn) || empty($checkOut)) {
                        echo '<p class="card-text">Los campos Check-in y Check-out son obligatorios</p>';
                    }else if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$checkIn) || !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$checkOut)){
                        echo '<p class="card-text">Formato de fecha incorrecto</p>';
                    }else if ($checkOut < $checkIn) {
                        echo '<p class="card-text">La fecha de salida no puede ser anterior a la fecha de entrada</p>';
                    }
                    if(!preg_match('/^[1-9]*$/',$people)){
                        echo '<p class="card-text">Solo se aceptan del 1 a 9 huésped/es</p>';
                    }
                    if (empty($dni)) {
                        echo '<p class="card-text">El campo de DNI es obligatorio</p>';
                    }else if(!validateDNI($dni)){
                        echo '<p class="card-text">DNI incorrecto. Ejemplo: 12345678X"</p>';
                    }
                    echo '<a href="cliente.php" class="btn btn-primary">Vuelve a la página anterior</a>';
                }
                if ($error == FALSE) {
                    echo '<h5 class="card-title">Reserva realizada con exito</h5>';
                    echo '<p class="card-text">Has realizado la reserva en: ' . $location . '</p>';
                    echo '<p class="card-text">Los días reservados son: ' . $checkIn . ' a ' . $checkOut . '</p>';
                    echo '<p class="card-text">La reserva está hecha para: ' . $people . ' huésped/es</p>';
                    echo '<p class="card-text">La reserva está hecha para el DNI: ' . $dni . '</p>';
                    echo '<a href="cliente.php" class="btn btn-primary">Haz tu siguiente reserva</a>';
                }

                function validateDNI($dni) {
                    $patron = '/^[0-9]{8}[A-Z]$/';
                    if (!preg_match($patron, $dni)) {
                        return false;
                    }
                    $numero = substr($dni, 0, -1);
                    $letra = substr($dni, -1);
                    $letraEsperada = substr("TRWAGMYFPDXBNJZSQVHLCKE", $numero % 23, 1);
                    if ($letra != $letraEsperada) {
                        return false;
                    }
                    return true;
                }
                ?>
            </div>
        </div>
</div>
<footer class="position-relative w-100 text-center p-5" style="background-color: #081134; color: whitesmoke; bottom: 0;">
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



