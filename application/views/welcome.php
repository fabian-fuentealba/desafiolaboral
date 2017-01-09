<br>
<br>
<?php echo form_open(NULL , array( 'autocomplete' => 'off' ) )?>

	<?php echo (validation_errors())?'<div class="alert alert-danger-alt animated shake"><ul>'.validation_errors('<li>','</li>').'</ul></div>':''; ?>
	<?php echo $this->session->flashdata('message')?>

	<div class="row">
		<div class="col-md-12">
			<div class="well">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>FILTRO</label>
							<input type="text" name="filtro" class="form-control" value="<?php echo set_value('filtro')?>" placeholder="QUE BUSCO ..." autofocus="">
						</div>

					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>CIUDAD</label>
							<input type="text" name="ciudad" class="form-control" value="<?php echo set_value('ciudad')?>" placeholder="CIUDAD ...">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>CATEGORIA</label>
							<select name="categoria[]" class="form-control selectpicker" multiple data-max-options="4" data-live-search="true"  data-selected-text-format="count">
								<optgroup label="CATEGORIAS"><?php					
									foreach ($categorias as $key => $value) {
										?>										
										<option value="<?php echo $value['id_categoria'] ?>" <?php echo set_select('categoria[]' , $value['id_categoria'] )?> ><?php echo $value['categoria'] ?></option><?php										
									}?>									
								</optgroup>			
							</select>
						</div>
					</div>

				</div>
			
				<div class="row">
					<div class="col-md-12 text-center">
						<button class="btn btn-primary"> <i class="fa fa-search" aria-hidden="true"></i> COMENZAR BUSQUEDA</button>
					</div>					
				</div>

			</div>
			
			<div class="alert alert-purple text-center animated tada" role="alert"> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				Si eres empresa, publica tus anuncios <strong>GRATIS</strong> y sin demoras. Si no estas registrado click en <br> <a href="<?php echo site_url('signup')?>" class="alert-link"> ¡ QUIERO REGISTRARME !</a> <br>
                <strong>OFERTA LIMITADA</strong>
            </div><?php
            if( count($jobs) > 0){
            	?>
            	<p class="">Listando <b><?php echo count($jobs)?></b> ofertas</p>
				<div class="list-group"><?php
					foreach ( $jobs as $key => $meta) {
						?>
						<a href="<?php echo site_url('oferta/detalle/' . $meta['id_aviso'])?>" class="list-group-item">
							<div class="row">
								<div class="col-md-2">
									<img src="<?php echo $meta['logo']?>" class="img-responsive img-rounded">
								</div>
								<div class="col-md-10">
									<h3 style="margin-top:2px;margin-bottom:0;"> <b><?php echo $meta['titulo']?></b></h3>
									<p style="margin-bottom:0;" class="text-muted" ><b><?php echo $meta['nombre_empresa']?></b> <em><?php echo $meta['lema']?></em><br>
									<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $meta['tipo_trabajo']?><br>
									<i class="fa fa-map" aria-hidden="true"></i> <?php echo $meta['ciudad']?>, <?php echo $meta['pais']?></p>
								</div>
							</div>
						</a><?php
					}?>				
				</div><?php
			}else{
				?>
				<div class="alert text-center"> <b>NADA PARA LISTAR</b></div><?php
				}?>
		</div>
	</div>

</form>