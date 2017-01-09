<div class="row" >

	<div class="col-md-offset-4 col-md-4"  >	   
	    <?php echo form_open( NULL , array("class"=>"form-signin" , "autocomplete" => "off" ) )?>	
		
			<div class="page-header" >
				<h1>  Login <small> empresa </small></h1>
			</div>

			<?php echo (validation_errors())?'<div class="alert alert-danger-alt animated shake"><ul>'.validation_errors('<li>','</li>').'</ul></div>':''; ?>
			<?php echo $this->session->flashdata("message")?>

			<input type="text" name="correo" class="form-control" value="<?php echo set_value("correo")?>" autocomplete="off" placeholder="CORREO" autofocus required>
			<input type="password" name="password" class="form-control" placeholder="PASSWORD" required >
			<button class="btn btn-primary btn-block" type="submit">
				INGRESAR
			</button>
			<br>
			<a href="<?php echo site_url('signup')?>" class="btn btn-link btn-block">  Olvide mi contraseña </a>
			
			<a href="<?php echo site_url('signup')?>" class="btn btn-link btn-block"> <b>QUIERO REGISTRARME</b> </a>
		</form>
	</div>

</div>