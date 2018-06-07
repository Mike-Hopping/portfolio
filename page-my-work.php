<?php
/*
Template Name: My Work
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
			<!-- <?php photo_gallery(1); ?> -->
		</main>
		<!-- <?php get_sidebar(); ?> -->
	</div>
</div>
<?php
get_footer();