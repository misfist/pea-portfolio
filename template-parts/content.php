<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pea_portfolio
 */

?>

<section id="<?php echo $post->post_name;?>" <?php post_class(); ?>>
	<div class="container">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="row">

			<article class="col-xs-12 col-sm-7">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pea_portfolio' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>
			</article><!-- .entry-content -->

			<?php if ( has_post_thumbnail() ) { ?>

				<figure class="col-xs-12 col-sm-4">
					<?php the_post_thumbnail( 'image image-border img-responsive' ); ?>
				</figure>

			<?php } ?>
			
		</div>


	</div>
</section><!-- #post-## -->
