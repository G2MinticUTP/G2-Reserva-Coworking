<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>G2 Reserva Coworking</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
			crossorigin="anonymous"
		/>
		<link th:href="@{css/G2styles.css}" rel="stylesheet" />
	</head>
	<body>
		<!--Etiquetas para navbar-->
		<header>
			<nav class="navbar" style="background-color: #dfdfdf">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"
						><img
							class="Logo"
							src="Img/Logo G2.png"
							width="180"
						/>
					</a>
					<a class="nav-link" th:href="@{/InicioSesion}">
						<img src="Img/Boton Login.png" width="50" /></a>
				</div>
			</nav>
		</header>

		<div class="títulos">
			<h2>RESERVA DE ESPACIOS COWORKING</h2>
		</div>

		<!--Etiquetas para cards centrales-->
		<div class="card mt-3 cards text-center container-fluid">
			<div class="row g-0">
				<div class="col-md-4">
					<img
						src="Img/oficina1.jpg"
						class="img-fluid rounded-start"
						alt="..."
					/>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">ESPACIO 1</h5>
						<p class="card-text">
							Oficina ubicada en zona norte, cuenta con un
							amplio espacio de trabajo, totalmente
							amoblada, cerca a zonas comerciales.
						</p>
					</div>
					<div
						class="card-footer bg-transparent border-success"
					>
						<p class="card-text">
							<small class="text-muted"
								>Para ver más detalles da click aquí</small
							>
						</p>
						<a th:href="@{/FormularioReserva}" class="btn btn-primary"
							>RESERVA AQUÍ</a
						>
					</div>
				</div>
			</div>
		</div>

		<div class="card mt-3 cards text-center container-fluid">
			<div class="row g-0">
				<div class="col-md-4">
					<img
						src="Img/oficina2.png"
						class="img-fluid rounded-start"
						alt="..."
					/>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">ESPACIO 2</h5>
						<p class="card-text">
							Oficina con espacios de esparcimiento, en zona
							noroccidente, cuenta con zonas verdes, cerca
							de establecimientos comerciales y zona de
							comidas.
						</p>
					</div>
					<div
						class="card-footer bg-transparent border-success"
					>
						<p class="card-text">
							<small class="text-muted"
								>Para ver más detalles da click aquí</small
							>
						</p>
						<a th:href="@{/FormularioReserva}" class="btn btn-primary"
							>RESERVA AQUÍ</a
						>
					</div>
				</div>
			</div>
		</div>

		<div class="card mt-3 cards text-center container-fluid">
			<div class="row g-0">
				<div class="col-md-4">
					<img
						src="Img/oficina3.jpg"
						class="img-fluid rounded-start"
						alt="..."
					/>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">ESPACIO 3</h5>
						<p class="card-text">
							Oficina ubicada en zona tranquila de la
							ciudad, cuenta con sala de juntas, espacios de
							trabajo individuales y buena iluminación.
						</p>
					</div>
					<div
						class="card-footer bg-transparent border-success"
					>
						<p class="card-text">
							<small class="text-muted"
								>Para ver más detalles da click aquí</small
							>
						</p>
						<a th:href="@{/FormularioReserva}" class="btn btn-primary"
							>RESERVA AQUÍ</a
						>
					</div>
				</div>
			</div>
		</div>

		<div class="card mt-3 cards text-center container-fluid">
			<div class="row g-0">
				<div class="col-md-4">
					<img
						src="Img/oficina4.jpg"
						class="img-fluid rounded-start"
						alt="..."
					/>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">ESPACIO 4</h5>
						<p class="card-text">
							Oficina ubicada en zona tranquila de la
							ciudad, cuenta con sala de juntas, espacios de
							trabajo individuales y buena iluminación.
						</p>
					</div>
					<div
						class="card-footer bg-transparent border-success"
					>
						<p class="card-text">
							<small class="text-muted"
								>Para ver más detalles da click aquí</small
							>
						</p>
						<a th:href="@{/FormularioReserva}" class="btn btn-primary"
							>RESERVA AQUÍ</a
						>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!--Etiquetas para footer-->

	<footer class="footer text-center p-3">
			<!--Grid row-->
			<div class="row">
				<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
					<p class="text-uppercase">Quienes Somos</p>
					<p class="text-uppercase">Misión</p>
					<p class="text-uppercase">Visión</p>
				</div>
				<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
					<p class="text-uppercase">Contacto</p>
					<p class="text-uppercase">Correo electrónico</p>
				</div>
			</div>
		</div>
	</footer>
</html>
