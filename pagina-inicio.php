<?php /* Template Name: Pagina Inicio */ ?>

<?php get_header();?>
  <body style="background-image: url(<?php the_field( "imagen_de_fondo" ); ?>);">

  <?php get_header('menu');?>
	
  <?php putRevSlider("blumos") ?> 
    <!--Nav-->
    <nav class="navbar fixed-top p-4">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/mbco.svg" alt="Menu" id="sidebarCollapse" class="img-fluid">
        <a class="navbar-brand" href="#">
            <img src="http://www.blumos.cl/wp-content/themes/Blumos-2018/img/logo-home.svg" alt="Blumos" class="img-fluid float-md-right">
        </a>
    </nav>
<style>
	.rev_slider_wrapper{
		background: #fff !important;
	}
</style>
<?php get_footer('home');?>