  <!--Footer-->
    <!--?php if (is_home) {} else {?-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 ml-auto prefooter"></div>
            </div>
        </div>
        <div class="container-fluid container-footer pt-4 pb-5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 text-center">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/logo-f.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <p class="text-center pt-3">Blumos todos los derechos reservados - 2018</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <input class="form-control buscar text-center" type="text" placeholder="">
                    </div>
                    <div class="col-lg-2 d-none d-lg-inline-flex">
                        <div class="idioma-footer"><a href="#">ES</a></div>
                        <div class="idioma-footer"><a href="#">EN</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
	<!--?php } ?-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    
       
  </body>
  <?php wp_footer();?>
<script>
		jQuery(document).ready(function() {
          
            jQuery("#sidebarCollapse").click(function(){
                jQuery(".navbar-brand").css("opacity", 0);
				jQuery("body").css({ "overflow" : "hidden"});
				jQuery( ".contenedor" ).show(300);
                jQuery( ".contenedor" ).animate({
                    "opacity": 1 }, 600 );
                jQuery( ".lateral" ).animate({
                   "marginLeft": "0" }, 400 );
                jQuery( ".central" ).animate({
                   "marginLeft": "-2%" }, 300 );

            });
			
			jQuery(".cerrar").click(function(){
                jQuery(".navbar-brand").css("opacity", 1);
                jQuery( ".contenedor" ).animate({
                    "opacity": 0 }, "slow" );
                jQuery( ".lateral" ).animate({
                   "marginLeft": "-150px" }, 100 );
                jQuery( ".central" ).animate({
                   "marginLeft": "-300px" }, 100 );
				jQuery("body").css({ "overflow" : "auto"}).delay(300);
				jQuery( ".contenedor" ).css({ "display" : "none"});
            });
            
	 
		 });
       
    </script>
</html>