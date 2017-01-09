<div class="page-header">
	<h1>  Avisos <small> listado general </small></h1>
</div>

<?php echo form_open()?>
	<div class="btn-group" role="group" aria-label="...">
		<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
		<a href="<?php echo site_url('publicar')?>" class="btn btn-default"> <b>NUEVO AVISO</b> </a>
	  	<a href="<?php echo site_url('avisos')?>" class="btn btn-default"><i class="fa fa-refresh" aria-hidden="true"></i> </a>  
	</div>

	<br>
	<br>

	<div id="no-more-tables">
		<table class="table table-bordered table-hover table-striped cf" >
			<thead class="cf" >
				<tr>
					<th>TITULO</th>
					<th>CREADO</th>
					<th>ESTADO</th>
					<th>OPCIONES</th>
					<th>ELIMINAR</th>		
				</tr>
			</thead>
			<tbody><?php
				if( count($avisos) < 1 ){
					?>
					<tr>
						<td colspan="5"> SIN AVISOS PARA LISTAR</td>
					</tr><?php
				}else{
					foreach ($avisos as $key => $value) {
						?>
						<tr>
							<td data-title="TITULO" ><?php echo $value['titulo']?></td>
							<td data-title="CREADO" ><?php echo $value['creado']?></td>
							<td data-title="ESTADO" ><span class="label label-<?php echo ( $value['id_estado'] == 1) ? 'default' : 'success' ;?>"><?php echo $value['estado_verbo']?></span></td>
							<td data-title="OPCIONES" align="center"> 
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a href="<?php echo site_url('avisos/editar/' . $value['id_aviso'])?>">EDITAR</a></li>
										<li><a href="<?php echo site_url('avisos/vistaprevia/' . $value['id_aviso'])?>" > VISTA PREVIA </a></li>							
									</ul>
								</div> 
							</td>
							<td data-title="ELIMINAR" align="center" ><input type="checkbox" name="eliminar[]" value="<?php echo $value['id_aviso']?>"></td>
						</tr><?php
					}
				}?>		
			</tbody>
		</table>
	</div>
</form>