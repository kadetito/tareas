<div class="container-fluid ">	<div class="row ">
		<div class="col-md-12 ">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top " >
			 
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <img class="imagenlogo ml-4" src="{$pathRecursos}/img/logowebentorn.png" alt="Logotipo de la empresa" />
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="{$path}/{$language}/index">Dashboard <span class="sr-only">(current)</span></a>
						</li>

						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Lista de proyectos</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="{$path}/{$language}/nuevo_proyecto">Nuevo Proyecto</a> 
								 <a class="dropdown-item" href="{$path}/{$language}/lp/listaproyectos">Proyectos de esta Suite</a> 
							</div>
						</li>
						
						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Issues</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="{$path}/{$language}/nueva_issue">Nueva Issue</a> 
								 <a class="dropdown-item" href="{$path}/{$language}/li/listaissues">Listado de Issues</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Cronograma</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Cronograma</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-md-auto mr-2">
						<li class="nav-item active">
							 <a class="nav-link" href="{$path}/{$language}/config">Configuración <span class="sr-only">(current)</span></a>
						</li>

						{if isset($perfil_nombre_usuario)}
							<li class="nav-item dropdown">
								 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">{$WelcomenombreCompletoUsuario} - Perfil</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									 <a class="dropdown-item" href="{$path}/{$language}/{$perfil_id_usuario}/perf/{$perfil_nombre_usuario_enc}">Datos Personales</a> 
									 <a class="dropdown-item" href="{$path}/{$language}/logout">Desconectar</a> 
								</div>
							</li>
						{/if} 
					</ul>
				</div>
				</div>
			</nav>
		</div>
	</div>

