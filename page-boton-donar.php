<?php
/*
* Template name: Boton Donar
*/
?>

<?php get_header(); ?>

<?php
$query = new WP_Query( 'pagename=desarrollo-de-competencias' );
// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() )
$query->the_post(); { ?>
<div id="verEsc" style="width: 100%;">
	<div class="areaAc"></div>
	<div class="contbtnd">
		<div class="vid">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<p class="text-center"><br/><a class="btnDonar" href="#">DONAR</a></p>
	</div>
	<div class="areaInac"></div>
</div>
<div id="verMov" class="text-center">
	<a href="#" class="btnDonarMov">DONAR</a>
</div>

<?php } }
/* Restore original Post Data */
wp_reset_postdata();
?>


<?php get_footer(); ?>