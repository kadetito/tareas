<header class="page-header row justify-center">
					<div class="col-md-4 col-lg-6" >
						<h1 class="float-left text-center text-md-left"><?php if(isset($titulo_seccion)){echo $titulo_seccion;} else {echo $TEXT_Dashboard;}?></h1>
					</div>
	    	<div class="dropdown user-dropdown col-md-4 col-lg-3 text-center text-md-right">					
											<div class="input-group">
												<input id="btn-input" type="text" class="form-control input-md" placeholder="<?=$TEXT_input_Buscar;?>" /><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo"><i class="fa fa-search" aria-hidden="true"></i></button>
											</span></div>		
				</div>		
					<div class="dropdown user-dropdown col-md-4 col-lg-3 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?=$pathRecursos;?>/images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1">Username</h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> <?=$TEXT_View_Profile;?></a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> <?=$TEXT_Preferences;?></a>
						     <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> <?=$TEXT_Logout;?></a></div>
					</div>
					<div class="clear"></div>
				</header>