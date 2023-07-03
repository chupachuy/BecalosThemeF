

<!-- SECC VIDAS QUE INSPIRAN -->


<div class="container-fluid fond_g">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br /><br /><br /><br /><br />
            </div>
        </div>
        <div class="row">
            <?php
                $query = new WP_Query( 'pagename=vidas-que-inspiran' );
                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() )
                $query->the_post(); { ?>
            <div class="col-md-12 vidas-que-inspiran">
                <h2 class="h2_gris text-center"><?php the_title(); ?></h2>
                <br />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="h3_gris text-center"><?php the_content(); ?></h3>
            </div>
        </div>

        <?php }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        <div class="row">
            <div class="col-md-12">
                <br /><br />
            </div>
        </div>
        <div class="row">
            <div id="owl-carousel1" class="owl-carousel owl-theme">
               <?php $custom_query = new WP_Query('cat=-7');
            /*$category = get_the_category( $id );*/
            while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <div class="col-md-12">
                    <!-- Card -->
                    <div class="card vidas-inspiran">
                        <!-- Card image -->
                        <!-- <img class="card-img-top" src="img/ind/card_1.jpg" alt="Card image cap"> -->
                        <div class="card-img-top">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h5 class="p_ti_card"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h5>
                            <h5 class="p_ti_card"><span class="tam_2 text_azul"><?php the_title(); ?></span></h5>
                            <!-- Text -->
                            <br />
                            <!--<p class="card-text"><?php the_excerpt(); ?></p>-->
                            <br /><br />
                            <p class="card-text text-right"><?php echo  get_post_meta($post->ID, 'nombre_familiar', true); ?><br /><?php echo  get_post_meta($post->ID, 'parentesco_familiar', true); ?></p>
                        </div>
                    </div>
                    <!-- Card -->
                    <br />
                </div>
                <?php endwhile; ?><?php wp_reset_postdata(); // reset the query ?>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br /><br /><br /><br /><br />
            </div>
        </div>
    </div>
</div>

