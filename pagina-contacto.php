<?php /* Template Name: Pagina Contacto */ ?>

<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <body style="background-image: url(<?php the_field( "imagen_de_fondo" ); ?>);">
  
  <?php get_header('menu');?>
  
  <div class="wrapper">
      
      <!-- Page Content -->
      <div id="content">
          <!--Nav-->
          <nav class="navbar navbar-expand-lg int">
              <div class="container-fluid">
                  <!--<button type="button" id="sidebarCollapse" class="btn btn-default">
                      <i class="fas fa-align-left"></i>
                  </button>-->
                  <img src="<?php bloginfo( 'template_url' ); ?>/img/menu.svg" alt="Menu" id="sidebarCollapse" class="">
                  <!--
                  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-align-justify"></i>
                  </button>-->
                  <a class="navbar-brand m-3 mr-5 mt-5 float-right" href="#">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/logo.svg" alt="Blumos" class="w-100">
                </a>
              </div>
          </nav>
    
          <!--Cabecera Page-->
          <div class="container">
              <div class="row">
                  <div class="col text-center">
                      <h2 class="pt-2"><?php the_title();?></h2>
                  </div>
              </div>
          </div>

          <!--Contenido Page-->
          <div class="container mt-5 text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                     <p class="lead">
                        <strong><?php the_excerpt();?></strong>
                    </p>
                </div>
            </div>
            
              <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="py-4 contenido">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="correo">Email</label>
                            <input type="email" class="form-control" id="Correo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="Telefono">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="empresa">Empresa</label>
                            <input type="text" class="form-control" id="Empresa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input type="text" class="form-control" id="Asunto">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="Mensaje" rows="3"></textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                  </div>
              </div>
              <div class="row d-flex justify-content-end">
                  <img src="<?php bloginfo( 'template_url' ); ?>/img/cert.png" alt="" class="img-fluid">
              </div>
          </div>
          
          <?php endwhile; endif;?>
      </div>
  </div>
  <?php get_footer();?>