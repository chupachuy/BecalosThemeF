<?php
$slides = array(); 
$args = array(
	'post_type' => 'sliders',
	'post_per_page' => 3,
	'category_name' => 'principal',
	'order' => 'date',

);
$slider_query = new WP_Query( $args );
if ( $slider_query->have_posts() ) {
    while ( $slider_query->have_posts() ) {
        $slider_query->the_post();
        if(has_post_thumbnail()){
            $temp = array();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_excerpt();
            $temp['content'] = get_the_content();
            $temp['image'] = $thumb_url;
            $slides[] = $temp;
        }
    }
} 
wp_reset_postdata();
?>

<!--Carousel Wrapper-->
<?php if(count($slides) > 0) { ?>


	<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

		<!--Indicators-->
		<ol class="carousel-indicators">
			<?php for($i=0;$i<count($slides);$i++) { ?>
        	<li data-target="#carousel-example-1z" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
        	<?php } ?>
		</ol>
		<!--/.Indicators-->

		<!--Slides-->
		<div class="carousel-inner" role="listbox">
			<!--First slide-->
			<?php $i=0; foreach($slides as $slide) { extract($slide); ?>
			<div class="carousel-item <?php if($i == 0) { ?>active<?php } ?>">

				<?php

				if($excerpt !== ""){ ?>
					<a href="<?php echo $excerpt; ?>">
						<div class="view" style="background-image: url('<?php echo $image ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">

							<!-- Mask & flexbox options-->
							<?php if ($content !== "") { ?>
								<div class="mask rgba-black-light d-flex justify-content-start align-items-center back_tr_n">
								<div class="container">
									<!-- Content -->
									<div class="white-text wow fadeIn col-md-6">
										<h1 class="mb-4 txt_slide_h1"><?php echo $title; ?></h1>
										<p class="text_slide_p"><?php echo $content; ?></p>
									</div>
									<!-- Content -->
								</div>

							</div>
							<?php } ?>
							<!-- Mask & flexbox options-->

						</div>
					</a>

				<?php }else{ ?>
					<div class="view" style="background-image: url('<?php echo $image ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">

						<!-- Mask & flexbox options-->
						<?php if ($content !== "") { ?>
							<div class="mask rgba-black-light d-flex justify-content-start align-items-center back_tr_n">
							<div class="container">
								<!-- Content -->
								<div class="white-text wow fadeIn col-md-6">
									<h1 class="mb-4 txt_slide_h1"><?php echo $title; ?></h1>
									<p class="text_slide_p"><?php echo $content; ?></p>
								</div>
								<!-- Content -->
							</div>

						</div>
						<?php } ?>
						<!-- Mask & flexbox options-->

					</div>

				<?php } ?>

				
			</div>
			<?php $i++; } ?>
			<!--/First slide-->

		</div>
		<!--/.Slides-->


		<!--Controls-->
		<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!--/.Controls-->

	</div>
	
<?php } ?>

<!--/.Carousel Wrapper-->