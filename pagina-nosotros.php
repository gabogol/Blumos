<?php /* Template Name: Pagina Nosotros */ ?>

<<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<body style="background-image: url('http://www.myapp.cl/clientes/blumos/wp-content/uploads/2018/08/bg-nosotros.jpg');background-position: center top;background-repeat: no-repeat;">
  
  <?php get_header('menu');?>
  
  <div class="wrapper">
      
      <!-- Page Content -->
      <div id="content" class="pagina-nosotros">
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


          <!--Contenido Page-->
           <div class="container p-5">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="pb-3"><?php the_title();?></h6>
                        <p class="display-5 pt-2"><?php the_field( "bajada_principal" ); ?></p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/curva-page.svg" alt="" class="curva-texto img-fluid">
                        <p><?php the_field( "txt_principal" ); ?></p>
                    </div>
                </div>
            </div>

             <!--Nosotros-->
             <article id="secNosotros">
                <div class="container">
                    <div class="row">
                        <div class="h720 d-flex align-items-center">
                            <div class="col-md-1">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/col-izq-img.png" alt="img-fluid">
                            </div>
                            <div class="col-md-10">
                                <p class="lead"><?php the_field( "txt_nosotros" ); ?></p>
                            </div>
                            <div class="col-md-1">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/col-der-img.png" alt="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!--Historia-->
            <article id="secHistoria">
                <div class="container py-5 h720 d-flex align-items-center">
                    <div class="row ">
                        <div class="col-md-5 align-self-start">
                            <h2 class="text-center"><?php the_field( "titulo_historia" ); ?></h2>
                        </div>
                        <div class="col-md-1">
                            <img src="<?php bloginfo( 'template_url' ); ?>/img/curva-horizontal.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p class="pt-4"><?php the_field( "txt_historia" ); ?></p>
                        </div>
                    </div>
                </div>
            </article>

            <!--Grupo-->
            <article id="secGrupo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pt-5 mt-5">
                            <h2 class="pb-5"><?php the_field( "titulo_grupo" ); ?></h2>
                            <p class="pl-md-5 p-3"><?php the_field( "txt_grupo" ); ?></p>
                        </div>
                        <div class="col-md-6 col-grupo">
                            <img src="<?php the_field( "img_grupo" ); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="pb-3"><?php the_field( "titulo_empresas" ); ?></h6>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php bloginfo( 'template_url' ); ?>/img/curva-page.svg" alt="" class="curva-texto img-fluid">
                        </div>
                    </div>
                </div>

                 <!--Empresas-->
                 <div class="container mt-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_1" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_1" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_1" ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_2" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_2" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_2" ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_3" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_3" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_3" ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 pt-3">
                        <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_4" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo2">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_4" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_4" ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_5" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo2">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_5" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_5" ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_6" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo2">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_6" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_6" ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 pt-5">
                        <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_7" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_7" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_7" ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_8" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_8" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_8" ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cuadrito">
                                <img src="<?php the_field( "imagen_empresa_9" ); ?>" alt="Blumos" class="img-cuadrito">
                                <div class="fondo">
                                    <div class="textito w-75">
                                        <h6><?php the_field( "titulo_empresa_9" ); ?></h6>
                                        <p><?php the_field( "texto_empresa_9" ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

             <!--Internacional-->
             <article id="secInter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_field( "titulo_internacional" ); ?></h2>
                        </div>
                    </div>
                    <div class="row der-iner">
                        <div class="col-md-6"></div>
                        <div class="col-md-5">
                            <img src="<?php the_field( "icono_plantas" ); ?>" alt="" class="float-left pr-1"> 
                            <h5 class="pt-2"><?php the_field( "titulo_plantas" ); ?></h5>
                            <img src="<?php the_field( "icono_oficinas" ); ?>" alt="" class="float-left pr-1">
                            <h5 class="pt-2"><?php the_field( "titulo_oficinas" ); ?></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <h5 class="pb-4"><?php the_field( "bajada_internacional" ); ?></h5>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-3"></div>
                        <div class="col-md-7">
                            <p><?php the_field( "txt_internacional" ); ?></p>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col-md-3">
                            <h5 class="pb-4"><?php the_field( "pais_1" ); ?></h5>
                            <p><strong><?php the_field( "pais_1_sub" ); ?></strong></p>
                            <p>
                                <?php the_field( "pais_1_txt" ); ?>
                            </p>
                            <p>
                                Tel: <strong><?php the_field( "pais_1_tel" ); ?></strong>
                                <a href="<?php the_field( "pais_1_link" ); ?>" target="_blank"><?php the_field( "pais_1_link_txt" ); ?></a>
                            </p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h5 class="pb-4"><?php the_field( "pais_2" ); ?></h5>
                            <p><strong><?php the_field( "pais_2_sub" ); ?></strong></p>
                            <p>
                                <?php the_field( "pais_2_txt" ); ?>
                            </p>
                            <p>
                                Tel: <strong><?php the_field( "pais_2_tel" ); ?></strong>
                                <a href="<?php the_field( "pais_2_link" ); ?>" target="_blank"><?php the_field( "pais_1_link_txt" ); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
          
          <?php endwhile; endif;?>
      </div>
  </div>
  <?php get_footer();?>