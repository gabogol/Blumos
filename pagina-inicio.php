<?php /* Template Name: Pagina Inicio */ ?>

<?php get_header();?>
  <body style="background-image: url(<?php the_field( "imagen_de_fondo" ); ?>);">
	 
  <?php get_header('menu');?>
	
	<?php putRevSlider("blumos") ?> 
  <div class="wrapper">
      <!-- Page Content -->
      <div id="content">
		   
          <!--Nav-->
          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                  <!--<button type="button" id="sidebarCollapse" class="btn btn-default">
                      <i class="fas fa-align-left"></i>
                  </button>-->
                  <img src="<?php bloginfo( 'template_url' ); ?>/img/mbco.svg" alt="Menu" id="sidebarCollapse" class="">
                  <!--
                  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-align-justify"></i>
                  </button>-->
                  <a class="navbar-brand m-3 mr-5 mt-5 float-right" href="#">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/logo-home.svg" alt="Blumos" class="img-fluid">
                </a>

                
              </div>
          </nav>
    
          
      </div>
  </div>
<style>
	.rev_slider_wrapper{
		background: #fff !important;
	}
</style>
  <?php get_footer();?>