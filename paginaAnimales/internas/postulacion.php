
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href=".//images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../index.php">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="borrar.php">Borrar Personal</a>
			<a href="#">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>Postulación</h2>
		<form method="post" action="procesarM.php">
			<div class="grupInput">
				<label form="nombres">Nombre <span class="alerta">*</span></label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required/>
			</div>
			<div class="grupInput">
				<label form="apellidos">Apellido <span class="alerta">*</span></label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
			</div>
            <div class="grupInput">
				<label form="direccion">Dirección</label>
				<input type="text" name="direccion" id="direccion" placeholder="Ingrese sus direccion">
			</div>
			<div class="grupInput">
				<label form="correo">Correo <span class="alerta">*</span></label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo" required>
			</div>
			<div class="grupInput">
				<label form="cedula">Cedula</label>
				<input type="number" name="cedula" id="cedula" placeholder="Ingrese sus cedula">
			</div>
            <div class="grupInput">
				<label form="mascota">Mascota</label>
                <select name= "select">
                    <option value="">Seleccione:</option>
                    <?php
                    $query = $db->consulta("SELECT * FROM nombres");
                    $query->execute();
                    $data = $query->fetchAll();

                    foreach ($data as $valores):
                    echo '<option value="'.$valores["id"].'">'.$valores["nombres"].'</option>';
                    endforeach;
                    ?>
				</select>
			</div>
			<div class="centrado">
				<button class="boton" type="submit">Guardar</button>
			</div>
		</form>
	</main>
	<section class="sponsor">
		<section class="logoDog">
			<img src="../images/logotipoPet.png">
		</section>
		<section class="logoUtpl">
			<img src="../images/logo_blanco_utpl.jpeg">
		</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href="#"><i class="fa-brands fa-facebook"></i> Facebook </a>
			<a href="#"><i class="fa-brands fa-instagram"></i> Instagram </a>
			<a href="#"><i class="fa-brands fa-twitter"></i> Twitter </a>
		</nav>
	</footer>
</div>
</body>
</html>