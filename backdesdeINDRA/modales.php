<!--MODAL 1 NOVA ISSUE-->
<div class="modal fade" id="modal-container-758809" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">
								Crear Nueva Issue
							</h5> 
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Creando nueva issue para le proyecto XXXXXX</p>
<div id="inscribir">
 <form name="empleado" onsubmit="return false" action="return false">						
<div class="container">
  <div class="row">	
  <div class="col-md-12 altal">
	<div class="form-group">  
		<div class="form-group form-group-sm"><label for="tipo" class="d-inline-block">Tipo</label><select name="tipo" class="form-control d-inline-block"><?php echo functionTipos();?></select></div>							
		<div class="form-group form-group-sm"><label for="prioridad" class="d-inline-block">Prioridad</label><select name="prioridad" class="form-control d-inline-block"><?php echo functionPrioridades();?></select></div>								
<div class="clearfix"></div>
<hr class="featurette-divider">
		<div class="form-group form-group-sm"><label for="nombre" class="d-inline-block">Nombre</label><input name="nombre_build" class="form-control d-inline-block" value="" autocomplete="off"  /></div>									
		<div class="form-group form-group-lg"><label for="descripcion_build" class="d-inline-block">Descripci&oacute;n</label><textarea rows="7" name="descripcion_build" class="form-control "></textarea></div>							
<div class="clearfix"></div>
<hr class="featurette-divider">
		<div class="form-group form-group-sm"><label for="asignar" class="d-inline-block">Asignar a</label>
		<select name="asignar" class="form-control d-inline-block">
		<option value="">Asigne usuarios</option>
										<?php $altaFormularioAs= altaFormularioAsignar($altaFormularioAsignar);
											foreach($altaFormularioAs as $msgAltaAS) {
												echo '
													 <option value="'.$msgAltaAS['id'].'">'.$msgAltaAS['nombre'].'</option>>
												  ';
								 		};?>
		</select>
		</div>
		<div class="form-group"><p class="text-right">Asignarme la issue a mi</p></div>
		<div class="form-group form-group-sm"><label for="componente" class="d-inline-block">Componente</label><select name="componente" class="form-control d-inline-block"><option value=""></option></select></div>								
<div class="clearfix"></div>
<hr class="featurette-divider">		
		<div class="form-group form-group-sm"><label for="nombre" class="d-inline-block">Fecha de entrega</label><input onkeydown="return false" name="nombre_build" class="form-control d-inline-block" autocomplete="off" id="datetimepicker1" /></div>							
		<div class="form-group form-group-sm"><label for="nombre" class="d-inline-block">Fecha inicio</label><input onkeydown="return false" name="nombre_build" class="form-control d-inline-block" autocomplete="off" id="datetimepicker2" /></div>						
		<div class="form-group form-group-sm"><label for="nombre" class="d-inline-block">Fecha final</label><input onkeydown="return false" name="nombre_build" class="form-control d-inline-block" autocomplete="off" id="datetimepicker3" /></div>					
<div class="clearfix"></div>
<hr class="featurette-divider">	
		<div class="form-group form-group-sm"><label for="nombre" class="d-inline-block">Horas previstas</label><input onkeydown="return false" placeholder="ejemplo: 50.30" name="nombre_build" autocomplete="off" class="form-control d-inline-block" /></div>							
<div class="clearfix"></div>
<hr class="featurette-divider">

        <div class="form-group form-group-sm"><label for="labels" class="d-inline-block">Etiquetes</label><select name="labels" class="form-control d-inline-block"><option value=""></option></select></div>								
		<div class="form-group form-group-sm"><label for="visionadores" class="d-inline-block">Participantes</label><input type="text" name="visionadores" class="d-inline-block typeahead tm-input form-control tm-input-info" placeholder="Escriba los participantes separados por comas" /></div>							
	</div> 
  </div>    
 </div>
</div>           

</form>
</div>						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">
								Crear issue
							</button> 
						</div>
					</div>
					
				</div>

			</div>
			
