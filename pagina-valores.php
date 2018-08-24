<?php /* Template Name: Pagina Valores */ ?>

<<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<body style="background-image: url('http://www.myapp.cl/clientes/blumos/wp-content/themes/Blumos-2018/img/bg-valores.jpg');background-position: center top;background-repeat: no-repeat;">
  
  <?php get_header('menu');?>
  
  <div class="wrapper">
      
      <!-- Page Content -->
      <div id="content" class="pagina-valores">
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
                    <div class="col-md-12 text-center">
                        <h2 class="pt-2 display-2"><?php the_title();?></h2>
                    </div>
                </div>
            </div>

         <!--Contenido Page-->

            <!---Calidad-->
            <article id="secCalidad">
                <div class="container mt-5">
                    <div class="row pt-5">
                        <div class="col-md-4 offset-md-1">
                            <img src="<?php the_field( "img_calidad" ); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7 text-center px-5">
                            <h3 class="pb-4"><?php the_field( "titulo_calidad" ); ?></h3>
                            <p class="lead"><?php the_field( "txt_calidad" ); ?></p>
                            <i class="fas fa-quote-right fa-5x float-right" style="margin:-35px 55px 0 0;color:#214295;opacity:0.3;"></i>
                        </div>
                    </div>
                </div>
            </article>

            <!---Trabajo-->
            <article id="secTrabajo">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-7 text-center px-5">
                            <h3 class="pb-4"><?php the_field( "titulo_trabajo" ); ?></h3>
                            <p class="lead"><?php the_field( "txt_trabajo" ); ?></p>
                            <i class="fas fa-quote-right fa-5x float-right" style="margin:-35px 55px 0 0;color:#214295;opacity:0.3;"></i>
                        </div>
                        <div class="col-md-4 offset-md-1"><img src="<?php the_field( "img_trabajo" ); ?>" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </article>

            <!---Eficiencia-->
            <article id="secEficiencia">
                <div class="container mt-5">
                    <div class="row pt-5">
                        <div class="col-md-4 offset-md-1"><img src="<?php the_field( "img_eficiencia" ); ?>" alt="" class="img-fluid"></div>
                        <div class="col-md-7 text-center px-5">
                            <h3 class="pb-4"><?php the_field( "titulo_eficiencia" ); ?></h3>
                            <p class="lead"><?php the_field( "txt_eficiencia" ); ?></p>
                            <i class="fas fa-quote-right fa-5x float-right" style="margin:-35px 55px 0 0;color:#214295;opacity:0.3;"></i>
                        </div>
                    </div>
                </div>
            </article>

             <!---Confianza-->
             <article id="secConfianza">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-7 text-center px-5">
                            <h3 class="pb-4"><?php the_field( "titulo_confianza" ); ?></h3>
                            <p class="lead"><?php the_field( "txt_confianza" ); ?></p>
                            <i class="fas fa-quote-right fa-5x float-right" style="margin:-35px 55px 0 0;color:#214295;opacity:0.3;"></i>
                        </div>
                        <div class="col-md-4 offset-md-1"><img src="<?php the_field( "img_confianza" ); ?>" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </article>

            <!---Responsabilidad-->
            <article id="secResponsabilidad">
                    <div class="container mt-5">
                        <div class="row pt-5">
                            <div class="col-md-4 offset-md-1">
                                <img src="<?php the_field( "img_resp" ); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7 text-center px-5">
                                <h3 class="pb-4"><?php the_field( "titulo_resp" ); ?></h3>
                                <p class="lead"><?php the_field( "txt_resp" ); ?></p>
                                <i class="fas fa-quote-right fa-5x float-right" style="margin:-35px 55px 0 0;color:#214295;opacity:0.3;"></i>
                            </div>
                        </div>
                    </div>
                </article>
          
          <?php endwhile; endif;?>
      </div>
  </div>
  <?php get_footer();?>