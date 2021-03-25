<?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    // if( is_active_sidebar( 'sidebar-1' )){
    //     var_dump(dynamic_sidebar('sidebar-1'));
    // var_dump(the_widget( 'sidebar-1' ));
    // }

?>


<footer>
  <div class="footer-inner">
    <section class="footer-item">
<?php
    if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div> 
<?php endif; ?>

    </section>
        
    <section class="footer-item">
      <h3>Industries</h3>
        <?php wp_nav_menu(array('theme_location' => 'Industries', 'container'=> false )); ?>
    </section>
                    
    <section class="footer-item">
      <h3>Integrations</h3>
        <?php wp_nav_menu(array('theme_location' => 'Integrations', 'container'=> false )); ?>
    </section>
        
    <section class="footer-item">
      <h3>Company</h3>
        <?php wp_nav_menu(array('theme_location' => 'Company', 'container'=> false )); ?>
    </section>
        
    <section class="footer-item">
      <h3>Resources</h3>
        <?php wp_nav_menu(array('theme_location' => 'Resources', 'container'=> false )); ?>
    </section>
            
  </div>

  <div class="footerBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pad0">
                    <div class="copyright-text">
                        <p>Copyright © 2021 Website. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-5  ">
                    <?php wp_nav_menu(array('theme_location' => 'Legal', 'container'=> false, 'menu_class'=> 'legalLinks' )); ?>
                </div>
                <div class="col-lg-3 col-md-offset-1">
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                    </div>    
                </div>    
            </div>
        </div>
  </div>

</footer>
		<?php wp_footer(); ?>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</body>
</html>