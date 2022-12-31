<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$image = get_field('upload_image');
$size = $image['sizes']['medium'];


get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			
			

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

				// $id = get_the_ID();

			// echo get_field('enter_price', $id);
				
			
				
				
			endwhile; // End of the loop.
			?>
			<img style="display: flex" src="<?php echo $size;?>"/>
			

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
