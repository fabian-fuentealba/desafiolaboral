<div class="page-header">
	<h1>  Avisos <small> editar </small></h1>
</div>

<div class="btn-group" role="group" aria-label="...">
	<a href="<?php echo site_url('avisos')?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="VOLVER" > <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
	<a href="<?php echo site_url('avisos/vistaprevia/' . $meta['id_aviso'])?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="VISTA PREVIA" > <i class="fa fa-eye" aria-hidden="true"></i>  </a> 
  	<a href="<?php echo site_url(uri_string())?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="ACTUALIZAR"><i class="fa fa-refresh" aria-hidden="true"></i>  </a>  
</div>

<br>
<br>

<?php echo form_open(NULL , array( 'autocomplete' => 'off' , 'class' => 'form-horizontal' ) )?>

	<?php echo (validation_errors())?'<div class="alert alert-danger-alt animated shake"><ul>'.validation_errors('<li>','</li>').'</ul></div>':''; ?>
	<?php echo $this->session->flashdata('message')?>	

	<div class="form-group">
		<div class="col-md-12">
			<p class="form-control-static text-muted"><b > DESCRIPCION OFERTA </b></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" >TITULO <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="titulo" value="<?php echo $meta['titulo']?>" placeholder="TITULO">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" >DESCRIPCIÓN <i class="fa fa-asterisk text-primary" aria-hidden="true"></i> <br>
		<small class="text-muted">TAGS HTML PERMITIDOS:
		<ul>		
			<li>&lt;ul&gt;</li>
			<li>&lt;li&gt;</li>
		</ul></small></label>
		<div class="col-md-9">
			<textarea class="form-control" name="descripcion" rows="12" placeholder="DESCRIPCION OFERTA"><?php echo $meta['descripcion']?></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >TIPO TRABAJO <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<select name="tipo_trabajo" class="form-control">
				<option value="">SELECCIONE</option>
				<optgroup label="TIPOS TRABAJO"><?php
					foreach ($tipos_trabajo as $key => $value) {
						?>
						<option value="<?php echo $value['id_tipo_trabajo'] ?>" <?php echo ( $value['id_tipo_trabajo'] == $meta['id_tipo_trabajo'] ) ? 'selected' : '' ; ?> ><?php echo $value['tipo_trabajo'] ?></option><?php
					}?>					
				</optgroup>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-3 control-label" >CATEGORIA <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<select name="categoria" class="form-control">
				<option value="">SELECCIONE</option>
				<optgroup label="CATEGORIAS"><?php					
					foreach ($categorias as $key => $value) {
						?>										
						<option value="<?php echo $value['id_categoria'] ?>" <?php echo ( $value['id_categoria'] == $meta['id_categoria'] ) ? 'selected' : '' ; ?> ><?php echo $value['categoria'] ?></option><?php										
					}?>									
				</optgroup>				
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >SALARIO <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<select name="salario" class="form-control">
				<option value="">SELECCIONE</option>
				<optgroup label="SALARIOS"><?php
					foreach ($salarios as $key => $value) {
						?>
						<option value="<?php echo $value['id_salario'] ?>" <?php echo ( $value['id_salario'] == $meta['id_salario'] ) ? 'selected' : '' ; ?> ><?php echo $value['salario'] ?></option><?php
					}?>					
				</optgroup>
			</select>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-12">
			<p class="form-control-static text-muted"><b> UBICACIÓN TRABAJO </b></p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >PAIS <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="pais" value="<?php echo $meta['pais']?>" placeholder="PAIS">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >CIUDAD <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="ciudad" value="<?php echo $meta['ciudad']?>" placeholder="CIUDAD">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-12">
			<p class="form-control-static text-muted"><b> COMO POSTULAR ? - </b>Indicar correo al cual llegaran los CV de los postulantes. Este será visible en el detalle de la oferta.</p>
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-3 control-label" >COMO POSTULAR ? <br>
		<small class="text-muted">TAGS HTML PERMITIDOS:
		<ul>		
			<li>&lt;ul&gt;</li>
			<li>&lt;li&gt;</li>
		</ul></small></label>
		<div class="col-md-9">
			<textarea class="form-control" name="como_postular" rows="5" placeholder="CONDICIONES PARA POSTULAR A LA OFERTA ( ADEMAS DEL C.V. )"><?php echo $meta['como_postular']?></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >CORREO POSTULACIÓN<i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="correo" value="<?php echo $meta['correo_postulacion']?>" placeholder="CORREO POSTULACIÓN">
		</div>
	</div>	

	<div class="form-group">
		<div class="col-md-12">
			<p class="form-control-static text-muted"><b> ESTADO PUBLICACIÓN </b></p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >ESTADO AVISO <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9"><?php
			foreach ($estados as $key => $value) {
				?>
				<div class="radio">
						<label>		
						<input type="radio" name="estado" value="<?php echo $value['id_estado'] ?>" > <b><?php echo $value['estado'] ?></b> - <?php echo $value['descripcion_estado'] ?> 
					</label>
				</div><?php
			}?>						
		</div>
	</div>

	<div class="form-group">		
		<div class="col-md-12">
		&nbsp;
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-offset-3 col-md-6">
			<button type="submit" class="btn btn-primary"> ENVIAR </button>			
		</div>
	</div>

</form>