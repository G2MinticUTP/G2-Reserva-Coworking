<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>G2 Recuperación de Contraseña</title>
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
					<a class="navbar-brand" th:href="@{/PáginaPrincipal}"
						>
                        <img
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
			<h1>RECUPERACIÓN DE CONTRASEÑA</h1>
		</div>

        <!--Etiquetas para el Login-->
		<div class="login">
			<div class="login-screen-recuperacion">
				
                <div class="text-area2">
                    <label>Escribe el correo electrónico de recuperación</label>
                </div>
                  
				<div class="login-form">
					
					<div class="control-group">
						<input
							type="adress"
							class="login-field"
							value=""
							placeholder="Correo electrónico"
							id="login-pass"
						/>
						<label
							class="login-field-icon fui-lock"
							for="login-pass"
						></label>
					</div>

					<a id="boton-recuperacion"
						class="btn btn-primary btn-large btn-block"
						href="#"
						>Enviar</a
					>
					<!--<a class="login-link" href="#"
						>¿Olvidaste tu contraseña?</a
					>
                    <a class="login-link" href="Registro.html"
						>Registrarse</a
					>-->
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