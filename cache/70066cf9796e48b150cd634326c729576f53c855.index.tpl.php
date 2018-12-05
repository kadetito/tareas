<?php
/* Smarty version 3.1.33, created on 2018-11-10 00:33:52
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be6196027d228_74146943',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'cef43f0430aaef7995eb894c7ae1cc19435817c7' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/index.tpl',
      1 => 1541806423,
      2 => 'file',
    ),
    '222003bdd1dc7ccf5475416ba8aa50672b0fb724' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/header.tpl',
      1 => 1541806423,
      2 => 'file',
    ),
    'e369b8d93990ef6ac44cebc5c9175aeea7c366fc' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/breadcrumb.tpl',
      1 => 1541806423,
      2 => 'file',
    ),
    'd42e0215aaaa99357a7a4d734c041f4356624c7e' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/buscador.tpl',
      1 => 1541806423,
      2 => 'file',
    ),
    'e35fa5542a12e41c8f741eb4e7182c540a324e7f' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/footer.tpl',
      1 => 1541806423,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5be6196027d228_74146943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content=";<?php echo '?>';?>">

	<link rel="icon" href="/favicon.ico">
	<title> - TestBuild () - </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/colorbox.css" />
</head>
<body>
	<div class="container">
				<header>
				<div class="row">
					<div class="col-12"><div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light navbar-blanca fixed-top">
<div class="container">				 
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <img class="imagenlogo" src="img/logowebentorn.png" alt="Logotipo de la empresa" />
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Suites</a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Lista de proyectos</a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Issues</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
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
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Configuración <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Perfil</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
				</div>
				</div>
			</nav>
		</div>
	</div></div>
				</div>
				</header>
		<section>
				<div class="row">
					<div class="col-12"></div>
				</div>
				<div class="row">
					 <div class="col-sm-4">
						<h3></h3>
						<h6></h6>
					</div>
					<div class="col-sm-4 text-right resbus"></div>
					<div class="col-sm-4"></div>
				</div>
				  
				  
					
				<div class="row">
				 <div class="col-md-12">

						<div class="table-responsive">
								<form action="" id="forumlario" id="forumlario" method="POST"><input type="hidden" name="identiff" value="<?php echo '<?=';?>//$getId;<?php echo '?>';?>">
											
											
											
											
											
											
											
											
											
											
											
											
											
											<div class="page-container">
											<table class="table table-bordered table-striped">
																				<thead>
																					<tr>
																						<th>		
																												<input type="checkbox" name="checktodos" id="customCheck555">
																						</th>
																						<th>ID </th>
																						<th></th>
																						<th><div class="float-left"></div><div class="float-right action-buttons"><?php echo '<?php ';?>//funcionOrdenProy();<?php echo '?>';?></div></th>
																						<th></th>
																						<th></th>
																						<th><div class="float-left"></div><div class="float-right action-buttons"><?php echo '<?php ';?>//funcionOrdenEst();<?php echo '?>';?></div></th>
																					</tr>
																				</thead>
																				<tbody>					
																															
								                         
																				</tbody>
											</table>
											
											<input class="btn btn-default" name="eliminacionmasiva" type="submit" value="borrar seleccionados" />
								      <input class="btn btn-default" name="modificacionmasiva" id="modmass" type="submit" value="editar seleccionados" />
								      
								                          
										</div>
								</form>
														<?php echo '<?php ';?>//borrarMasivoProyecto($path,$lengua,$getId,$checkbox,$value,$tabla);<?php echo '?>';?>
														<?php echo '<?php ';?>//editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);<?php echo '?>';?>
													  <?php echo '<?php ';?>//eliminarYvolver();<?php echo '?>';?>
							</div>
					</div>

			</div>





					<div class="row">
						<div class="col-md-12 text-center">
															<div class="btn-group">								
																	<div id="pagination_controls"></div>				
															</div>	
					  </div>
					</div>


<div class="row">
	<div class="col-12 mt-1 mb-4"> <a target="_blank" href=""></a></div>
</div>				

				</section>
	
</div>
	



    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="/js/sweetalert.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
		<script src="/js/jquery.colorbox-min.js"></script>  
    <script src="/js/jquery.validate.min.js"></script>
    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="/js/custom.js"></script>
    <script src="/js/tether.min.js" language="javascript"></script>
    

	</body>
</html>

<?php }
}
