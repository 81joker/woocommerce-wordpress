<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
					<div class="col-lg-9 col-md-8 col-12">
						<?php 
							// If there are any posts
							if( have_posts() ):

								// Load posts loop
								while( have_posts() ): the_post();
										get_template_part( 'template-parts/content' );
								endwhile;
						// the_posts_pagination(
						// 	array(
						// 		'prev_text'          => __( 'Previous page A', 'fancy-lab' ),
						// 		'next_text'          => __( 'Next page B', 'fancy-lab' ),
						// 		/* translators: Hidden accessibility text. */
						// 		'before_page_number' => '<span class="meta-nav screen-reader-text bg bg-info">' . __( 'Page', 'fancy-lab' ) . ' </span>',
						// 	)
						// );
						the_posts_pagination( array(
							'prev_text'		=> 'Previous',
							'next_text'		=> 'Next',
						));
						
							else:
						?>
							<p>Nothing to display.</p>
						<?php endif; ?>
					</div>
					<?php get_sidebar(); ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>