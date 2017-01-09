<nav class="navbar navbar-default shadow navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url()?>"><?php echo $this->logo;?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        
                        
                      </ul>
                    
                      <ul class="nav navbar-nav navbar-right text-center">
                          <li><a href="<?php echo site_url()?>"> <i class="fa fa-search" aria-hidden="true"></i> BUSCAR </a></li>
                          <li ><a href="<?php echo site_url('signup')?>"> QUIERO REGISTRARME </a></li>
                          <?php
                          if($this->session->userdata("logged_in") !== TRUE ){
                              ?>                              
                              <li ><a href="<?php echo site_url('login')?>" > LOGIN </a></li><?php
                          }else{
                              ?>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                                      <i class="fa fa-user" aria-hidden="true"></i> MI CUENTA <i class="fa fa-chevron-down" aria-hidden="true"></i> 
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li ><a href="<?php echo site_url('perfil')?>" > PERFIL </a></li>
                                      <li ><a href="<?php echo site_url('publicar')?>" > NUEVO AVISO </a></li>
                                      <li ><a href="<?php echo site_url('avisos')?>" > AVISOS </a></li>
                                      <li ><a href="<?php echo site_url('logout')?>" > LOGOUT </a></li>
                                  </ul>
                              </li><?php
                          }?>                          
                          <li><button type="button" class="btn btn-success navbar-btn" onclick="location.href='<?php echo site_url('publicar')?>'"> <b>PUBLICAR GRATIS ! </b></button></li>
                          <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> MI CUENTA <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ><a href="<?php echo site_url('logout')?>" > LOGOUT </a></li>
                            </ul>
                          </li>-->
                      </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->

            </div>
        </div>
    </div>
</nav>