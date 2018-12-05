<form action="" method="GET">
						<div class="input-group">
							 <input type="hidden" name="ordena" value="<?=$_GET['ordena'];?>" />
							 <input type="hidden" name="ordene" value="<?=$_GET['ordene'];?>" />
						   <input type="text" name="valor_busqueda" placeholder="<?=$TEXT_BuscarPorIdTarea;?>" class="form-control" />
						   <span class="input-group-btn">
						        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
						        <a href="./index.php"><button class="btn"><?=$TEXT_Breiniciar;?></button></a>
						   </span>
						</div>
					</form>