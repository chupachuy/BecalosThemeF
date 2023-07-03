  <!--Footer-->
  <footer class="cont_pie fadeIn">
    <div class="container">

      <?php
        $query = new WP_Query( 'pagename=footer' );
        // The Loop
        if ( $query->have_posts() ) {
          while ( $query->have_posts() )
        $query->the_post(); { ?>
      
      <div class="row">
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12">
              <!--<img class="logo_foo" src="<?php bloginfo('template_url'); ?>/img/logo_f.png">-->
              <?php the_post_thumbnail('full', ['class' => 'logo_foo', 'title' => 'full']); ?>
            </div>
            <div class="col-md-12" style="margin-top: 1em;">
              <p class="text_foot"><?php echo Date('Y'); ?> Bécalos All rights reserved</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center text_foot_c">
          <?php the_content(); ?>
          <!--<a href="<?php echo  get_post_meta($post->ID, 'preguntas_frecuentes', true); ?>" class="preguntas_frecuentes">Preguntas frecuentes</a>-->
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 1em; margin-bottom: 1em;">

              <?php if (get_post_meta( get_the_ID(), 'facebook-url', true ) ) { ?>
              <a class="red_fo" href="<?php echo  get_post_meta($post->ID, 'facebook-url', true); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <?php } ?>

              <?php if (get_post_meta( get_the_ID(), 'instagram-url', true ) ) { ?>
              <a class="red_fo" href="<?php echo  get_post_meta($post->ID, 'instagram-url', true); ?>" target="_blank"><i class="fab fa-instagram" ></i></a>
              <?php } ?>

              <?php if (get_post_meta( get_the_ID(), 'twitter-url', true ) ) { ?>
              <a class="red_fo" href="<?php echo  get_post_meta($post->ID, 'twitter-url', true); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
              <?php } ?>

              <?php if (get_post_meta( get_the_ID(), 'youtube-url', true ) ) { ?>
              <a class="red_fo" href="<?php echo  get_post_meta($post->ID, 'youtube-url', true); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
              <?php } ?>

            </div>
            <div class="col-md-12">
              <p class="text-center"><a class="btn_ap" href="<?php bloginfo('url'); ?>/<?php echo  get_post_meta($post->ID, 'aviso_de_privacidad', true); ?>">Aviso de privacidad</a></p>
            </div>
          </div>
        </div>
      </div>

      <?php } }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
      <
      <div class="row">
        <div class="col-md-6 text-left">
          <br/>
        </div>
      </div>

    </div>
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mdb.min.js"></script>

  <!-- HISTORIAS -->
  <script src="<?php bloginfo('template_url'); ?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/flickity.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <!-- HISTORIAS -->


 <!-- ACC -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/acc.js"></script>
  <!-- ACC -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.counterup.min.js"></script>



  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <script type="text/javascript">
    $("#tal").trigger("click");
  </script>
  <?php wp_footer(); ?>
</body>

</html>