<div class="page-header">
	<h1>  Perfil <small> empresa </small></h1>
</div>

<?php echo form_open_multipart(NULL , array( 'autocomplete' => 'off' , 'class' => 'form-horizontal' , 'autocomplete' => 'off' ) )?>

	<?php echo (validation_errors())?'<div class="alert alert-danger-alt animated shake"><ul>'.validation_errors('<li>','</li>').'</ul></div>':''; ?>
	<?php echo $this->session->flashdata("message")?>	
	
	<div class="form-group">
		<div class="col-md-12">
			<p class="form-control-static text-muted"><b> DATOS CUENTA </b> - (PRIVADO ) </p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" >NOMBRE <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="name" value="<?php echo $meta['nombre']?>" placeholder="NOMBRE">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" >CORREO <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="email" class="form-control" name="email" value="<?php echo $meta['correo']?>" placeholder="micorreo@correo.com">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" > PASSWORD <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="password" class="form-control" name="password" placeholder="PASSWORD">
		</div>
	</div>	

	<div class="form-group">
		<div class="col-md-12">
			<p class="form-control-static text-muted"><b> INFORMACION EMPRESA </b> - ( PUBLICO ) </p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" >NOMBRE EMPRESA <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="nombre_empresa" value="<?php echo $meta['nombre_empresa']?>" placeholder="NOMBRE EMPRESA">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" > LEMA </label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="tagline" value="<?php echo $meta['lema']?>" placeholder="LEMA EMPRESA">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" > SITIO WEB <i class="fa fa-asterisk text-primary" aria-hidden="true"></i></label>
		<div class="col-md-9">
			<input type="text" class="form-control" name="web_site" value="<?php echo $meta['sitio']?>" placeholder="http://">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" > LOGO <small>( BMP, JPG, JPEG, PNG )</small></label>
		<div class="col-md-6">				
			<input type="file" class="form-control" name="logo" >
		</div>
		<div class="col-md-3">
			<p class="form-control-static text-muted"> ( minimo 130px x 130px ) </p>
		</div>
	</div>

	<div class="form-group">		
		<div class="col-md-offset-3 col-md-9">
			<img src="<?php echo $meta['logo']?>" class="img-responsive img-rounded img-thumsbnail">
		</div>
	</div>

	<div class="form-group">		
		<div class="col-md-12">
		&nbsp;
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-offset-3 col-md-3">
			<button type="submit" class="btn btn-primary"> ENVIAR </button>
		</div>
	</div>
</form>