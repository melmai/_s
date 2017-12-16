<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h1 class="entry-title">Projects</h1>

			<section id="portfolio-items">

				<?php
					$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

					foreach( $mypages as $page ) {		
						$content = $page->post_content;
						if ( ! $content ) // Check for empty page
							continue;

						$content = apply_filters( 'the_content', $content );
					?>
						<div class="portfolio-item">
							<p class="portfolio-skills"><?php echo get_post_meta( $page->ID, 'skills', true ); ?></p>
							<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
							<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?> 
							<!-- <div class="entry"><?php //echo $content; ?></div> -->
						</div><!-- .portfolio-item -->
					<?php
					}	
				?>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
