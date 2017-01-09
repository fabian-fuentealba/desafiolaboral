<div class="row">
	<div class="col-md-12">
		<div class="error">
		    <div class="error-code m-b-10 m-t-20"> <b><?php echo $title ?></b>
		    	<i class="fa fa-exclamation-triangle <?php echo $class ?>" aria-hidden="true"></i>
		    </div>
		    <h3 class="font-bold"><?php echo $subtitle ?></h3>

		    <div class="error-desc">
		        <?php echo $message?>
		        <div>
		            <a class=" login-detail-panel-button btn" href="<?php echo site_url()?>">
		                    <i class="fa fa-arrow-left"></i>
		                    Regresar a la pagina de inicio                       
		                </a>
		        </div>
		    </div>
		</div>
	</div>
</div>