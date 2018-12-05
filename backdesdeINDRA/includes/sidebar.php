<nav class="sidebar col-xs-12 col-sm-4 col-lg-4 col-xl-3">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> <?=$rowSettings['company'];?></a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				
				
				
				<!--
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.html"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="widgets.html"><em class="fa fa-calendar-o"></em> Widgets</a></li>
					<li class="nav-item"><a class="nav-link" href="charts.html"><em class="fa fa-bar-chart"></em> Charts</a></li>
					<li class="nav-item"><a class="nav-link" href="buttons.html"><em class="fa fa-hand-o-up"></em> Buttons</a></li>
					<li class="nav-item"><a class="nav-link" href="forms.html"><em class="fa fa-pencil-square-o"></em> Forms</a></li>
					<li class="nav-item"><a class="nav-link" href="cards.html"><em class="fa fa-clone"></em> Cards</a></li>
				</ul>-->
				
				
<ul class="nav nav-pills flex-column sidebar-nav list-unstyled">
	
        <li class="nav-item">
        	<div class="col-md-12 siferencial"><p><small><?=$TEXT_Proyecto_de_prueba_actual;?></small></p>
        		<form action="<?=$_SERVER['PHP_SELF'];?>" method="GET">
        	  <select class="form-control" name="getId" onchange="this.form.submit()">
        	  	
        	  	 <option value=""><?=$TEXT_Seleccionesunproyecto;?></option>     	  		

        	  	<?php 
        	  	if(($rowGeneral['id']=='') || ($rowGeneral['id']=='000000') || ($_GET['getId']=='') || ($_GET['getId']=='000000')){
        	 	      echo '<option value="" selected>'.$TEXT_Seleccionesunproyecto.'</option>';        	  		
        	 	   } else { 
        	 	      echo '<option value="'.$rowGeneral['id'].'" selected>'.$rowGeneral['id'].' '.$rowGeneral['nombre_proyecto'].'</option>';
        	 	   } ?>
        	 	 
        	 	 
        	 	 
        	 	
        	 	 <?php
        	 	 $sql = "SELECT * FROM proy_proyectos";
             if(!$result = mysqli_query($conexion, $sql)) die();
             while($rowSalida = mysqli_fetch_array($result))
             {
              echo '<option value="'.$rowSalida['id'].'">'.$rowSalida['id'].''.$rowSalida['nombre_proyecto'].'</option>';
             }

						?>
        	 </select>
        	 </form>
        	</div>
          <div id="Menu" class="list-group">
          	
            <a href="<?=$path;?>/<?=$lengua;?>/<?=$getId;?>/gestion-proyectos" class="nav-link"><em class="fa fa-hand-o-right"></em>   <?=$TEXT_Gestionar_proyectos_de_pruebas;?> </a>
          	
          	
            <a href="#demo3" class="nav-link " data-toggle="collapse" data-parent="#Menu"><em class="fa fa-hand-o-right"></em> <?=$TEXT_Builds_de_este_proyecto;?> <i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu" id="demo3">
              <a href="#MenuLvl1" class="nav-link diff" data-toggle="collapse" data-parent="#MenuLvl1"><i class="fa fa-folder-open" aria-hidden="true"></i> Analiticas <i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="MenuLvl1">
                <!--<a href="#" class="nav-link dleff" data-parent="#MenuLvl1"><i class="fa fa-angle-right"></i> Subitem 1</a>
                <a href="#" class="nav-link dleff" data-parent="#MenuLvl1"><i class="fa fa-angle-right"></i> Subitem 2</a>-->
                <a href="#SubSubMenu1" class="nav-link dleff" data-toggle="collapse" data-parent="#SubSubMenu1" title="Suite DCL00P001:Revisión de componentes sanguineos"><div class="spandleff"><i class="fa fa-folder-open" aria-hidden="true"></i> Suite DCL00P001:Revisión de componentes sanguineos <span class="treeview-indicator2">(0, 0, 0, 0)</span></div></a>
                <div class="insidecollapse">
                	<div class="collapse list-group-submenu fonsblanc" id="SubSubMenu1">
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> <b>DCL00P001:</b> estrogenos y componentes basados den bla bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P002: analisis de trigliceridos con componentes bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P001: estrogenos y componentes basados den bla bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P002: analisis de trigliceridos con componentes bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P001: estrogenos y componentes basados den bla bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P002: analisis de trigliceridos con componentes bla bla </div></a>                                                                                
                 </div>
                 <a href="#SubSubMenu2" class="nav-link dleff" data-toggle="collapse" data-parent="#SubSubMenu1" title="Suite DCL00P002:Revisión de componentes sanguineos"><div class="spandleff"><i class="fa fa-folder-open" aria-hidden="true"></i> Suite DCL00P001:Revisión de componentes sanguineos <span class="treeview-indicator2">(0, 0, 0, 0)</span></div></a>
                 <div class="collapse list-group-submenu fonsblanc" id="SubSubMenu2">
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> <b>DCL00P001:</b> estrogenos y componentes basados den bla bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P002: analisis de trigliceridos con componentes bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P001: estrogenos y componentes basados den bla bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P002: analisis de trigliceridos con componentes bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P001: estrogenos y componentes basados den bla bla bla </div></a>
                  <a href="#" class="nav-link tleff" data-parent="#SubSubMenu1" title="DCL00P001: estrogenos y componentes basados den bla bla bla"><div class="spandleff2"><i class="fa fa-angle-right"></i> DCL00P002: analisis de trigliceridos con componentes bla bla </div></a>                                                                                
                 </div>
                </div> 
              </div>
              <a href="#" class="nav-link diff"><i class="fa fa-angle-right"></i> Subitem 2</a>
              <a href="#" class="nav-link diff"><i class="fa fa-angle-right"></i> Subitem 3</a>
            </div>
            <a href="#demo4" class="nav-link" data-toggle="collapse" data-parent="#Menu"><em class="fa fa-hand-o-right"></em> <?=$TEXT_Area_de_trabajo;?> <i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu" id="demo4">
              <a href="" class="nav-link diff"><i class="fa fa-angle-right"></i> <?=$TEXT_Configuracion_de_roles;?></a>
              <a href="" class="nav-link diff"><i class="fa fa-angle-right"></i> <?=$TEXT_Usuarios_del_proyecto;?></a>
              <a href="" class="nav-link diff"><i class="fa fa-angle-right"></i> <?=$TEXT_Gestion_de_campos_customizados;?></a>
            </div>
            <a href="#demo5" class="nav-link" data-toggle="collapse" data-parent="#Menu"><em class="fa fa-hand-o-right"></em> Item 3 <i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu" id="demo5">
              <a href="#" class="nav-link diff"><i class="fa fa-angle-right"></i> Subitem 1</a>
              <a href="" class="nav-link diff"><i class="fa fa-angle-right"></i> Subitem 2</a>
              <a href="" class="nav-link diff"><i class="fa fa-angle-right"></i> Subitem 3</a>
            </div>
          </div>
        </li>
      </ul>
				
				
				
				
				<!--<a href="login.html" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>-->
			</nav>