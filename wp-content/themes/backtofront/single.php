<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Back to Front Wordpress
 */

get_header(); ?>

<div class="content-wrapper">
	<div class="content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; ?>

	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>