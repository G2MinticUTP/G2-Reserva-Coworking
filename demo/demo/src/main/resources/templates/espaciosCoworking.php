<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
	<head>
		<meta charset="utf-8" />
		<title>G2 Administración Coworking</title>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1"
		/>
		<!--<link rel="stylesheet" type="text/css" href="G2styles.css" />-->
		<link th:href="@{css/G2styles.css}" rel="stylesheet" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
			crossorigin="anonymous"
		/>
	</head>

	<body>
		<!--Etiquetas para navbar-->
		<header>
			<nav class="navbar" style="background-color: #dfdfdf">
				<div class="container-fluid">
					<a
						class="navbar-brand"
						th:href="@{/PáginaPrincipal}"
						><img
							class="Logo"
							src="/Img/Logo G2.png"
							width="180"
						/>
					</a>
					<a class="nav-link" th:href="@{/InicioSesion}">
						<img src="Img/Boton Login.png" width="50"
					/></a>
				</div>
			</nav>
		</header>

		<div class="títulos">
			<h2>ADMINISTRACIÓN DE ESPACIOS COWORKING</h2>
			<br />
			<a
				a
				class="boton-crear-espacios"
				th:href="@{/crearCoworking}"
				>CREAR ESPACIO</a
			>
		</div>

		<!--Etiquetas para tabla-->
		<div>
			<table id="tabla">
				<thead>
					<tr>
						<th>CÓDIGO</th>
						<th>TÍTULO</th>
						<th>DESCRIPCIÓN</th>
						<th>IMAGEN</th>
						<th colspan="3">ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					<tr th:each="coworking: ${AllCoworking}">
						<td th:text="${coworking.id}"></td>
						<td th:text="${coworking.titulo}"></td>
						<td th:text="${coworking.descripcion}"></td>
						<td>
							<img
								class="imgCoworking"
								th:src="${coworking.media}"
							/>
							<!--<img src="https://www.wework.com/es-LA/ideas/wp-content/uploads/sites/15/2021/02/Web_150DPI-20210124_WeWork_Brand-Shoot_San-Francisco_002_v1-scaled-1120x630.jpg" width="30%">-->
						</td>
						<!--<td>
                        <a class="nav-link" th:href="@{/crearCoworking}">
                        <img src="Img/crear2.png" width="27" /></a>
                    </td>-->
						<td>
							<a
								class="nav-link"
								th:href="@{/editarCoworking/{id}(id=${coworking.id})}"
							>
								<img src="Img/editar.png" width="30"
							/></a>
						</td>
						<td>
							<form
								th:action="@{/eliminar/{id}(id=${coworking.id})}"
								th:object="${coworking}"
								method="post"
							>
								<button class="eliminar">
									<img
										class="img"
										src="Img/eliminar.png"
										width="30"
									/>
								</button>
							</form>
						</td>
					</tr>
				</tbody>
			</table>
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
	</footer>
</html>
