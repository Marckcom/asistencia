<?php session_start(); ?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ASISTENCIA</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="/images/anr.jpeg" />
	<style>
		body,
		html {
			margin: auto;
			background: #2f3542;
			background-image: url("./images/ciencias.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			background-attachment: fixed;
			height: 100%;
			/* ges Hoehe der Seite -> weitere Hoehenangaben werden relativ hierzu ausgewertet */
			overflow: hidden;
			/*  hide scrollbars */
		}
	</style>
</head>

<body>
	<div class="container" style="margin-top:5%">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-6">
					<canvas id="" width="520" height="510"></canvas>
				</div>

				<div class="col-md-6">
					<h3 style="color:#fff">SISTEMA DE ASISTENCIA AL DIPLOMADO</h3>

				</div>
				<div class="col-md-6">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<a class="navbar-brand" href="#">ACADEMIA REPUBLICANA</a>
							</div>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="attendance.php"> <span class="glyphicon glyphicon-calendar"></span>VER REGISTRO</a></li>
							</ul>
						</div>
					</nav>
					<form action="TimeInOut.php" method="post" class="form-horizontal" style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
						<i class="glyphicon glyphicon-barcode"></i> <label>INGRESE SU NUMERO CEDULA SIN PUNTOS, NI ESPACIOS.</label>
						<p></p>
						<input type="text" name="studentID" id="text" placeholder="5852111" class="form-control" autofocus>
						<br>
						<input type="submit" value="ENVIAR" class="btn btn-primary">
					</form>
					<div class="row">
						<div class="col-md-12">
							<!-- <label style="color:#fff">Legend: </label>
						<label class="label label-primary">Tiempo en</label>
						<label class="label label-Success">Se acabó el tiempo</label>
						<label class="label label-danger">Número de cedula no encontrada</label> -->
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<?php
							if (isset($_SESSION['error'])) {
								echo "
					<div id='alert' class='alert alert-danger' style='background:#eb3b5a;color:#fff;border:none'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h4><i class='icon fa fa-warning'></i> Error!</h4>
					  " . $_SESSION['error'] . "
					</div>
				  ";
								unset($_SESSION['error']);
							}
							if (isset($_SESSION['success'])) {
								echo "
					<div id='alert' class='alert alert-success' style='background:#20bf6b;color:#fff;border:none'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h4><i class='icon fa fa-check'></i>FELICIDADES!</h4>
					  " . $_SESSION['success'] . "
					</div>
				  ";
								unset($_SESSION['success']);
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<p style="color:white; font-weight:bold;">Si no aparece tu número de cédula en el sistema, por favor envía tu asistencia en el siguiente formulario, RECUERDA "SOLO SI NO APARECE TU NUMERO DE CEDULA EN LA CASILLA DE ARRIBA":</p>
					<a href="https://docs.google.com/forms/d/e/1FAIpQLScT47CTVDixsaMkCUpWMlNtEJMcHkWcGZWA5MY1DSnjJXaKJg/viewform?embedded=true" class="btn btn-success" style="width:100%;">FORMULARIO DE ASISTENCIA</a><br>
				</div>
				<br>
				<br>
				<div class="col-md-6">
					<p style="color:white; font-weight:bold;">UNETE AL CANAL DE WHATSAPP "SI AUN NO ESTAS EN EL CANAL" PARA RECIBIR TODA LAS INFORMACIONES CLIQUEANDO ABAJO</p>
					<a href="https://whatsapp.com/channel/0029VaYjk1M0AgWBZBxsI80j" class="btn btn-warning" style="width:100%;">CANAL DE WHATSAPP</a>
					<br>
					<br>
				</a>
					<p style="color:white; font-weight:bold;"> "SUBIR EL COMPROBANTE DEL PAGO POR MODULO EN EL SIGUIENTE FORMULARIO</p>
					<a href="https://forms.gle/jk7XJ1w7QdpbbXzHA" class="btn btn-primary" style="width:100%;">ENVIAR MI COMPROBANTE</a>
					</a>
				</div>
				

		

			</div>
		</div