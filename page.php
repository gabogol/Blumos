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
                
                  <div class="col-md-6">
                      <?php the_post_thumbnail('full', array( 'class'	=> 'img-fluid')); ?>
                  </div>
                  <div class="col-md-4 d-flex align-items-center justify-content-end">
                      <div class="float-right text-right mt-4 w-100">
                        <img src="<?php the_field( "icono" ); ?>" alt="" class="img-fluid w-25">
                        <h2 class="pt-2"><?php the_title();?></h2>
                      </div>
                  </div>
                  <div class="col-md-3">
                  </div>
              </div>
          </div>

          <!--Contenido Page-->
          <div class="container mt-5">
            
            <div class="row">
                <div class="col-md-6 offset-md-3">
                     <p class="lead">
                        <strong><?php the_excerpt();?></strong>
                    </p>
                </div>
            </div>
            
              <div class="row">
                  <div class="col-md-5 offset-md-3">
                    <div class="py-4 contenido">
                        <?php the_content();?>
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