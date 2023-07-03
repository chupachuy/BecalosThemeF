<?php
/*
* Template name: legales
*/
?>

<?php include('btnDonar.php'); ?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/><br/>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<h2 class="h2_gris text-center"><?php the_title(); ?></h2>
				</div>
			</div>

			<div class="separar"></div>
			<div class="separar"></div>

			<div class="row">
				<div class="col-md-12 tex_bas_sec">
					<?php the_content(); ?>
				</div>
			</div>

		</div>
	</div>
</main>




<?php endwhile; else: ?><?php endif; ?>


<?php get_footer(); ?>