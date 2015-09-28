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

    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
        <?php if( get_field('sub_head') ) { ?><h2><?php the_field('sub_head'); ?></h2><?php } ?>
    </header><!-- .entry-header -->

    <article class="entry-content">
        <div class="main-content" role="main">
        <?php
        the_content( sprintf(
            /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pea_portfolio' ), array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );
        ?>
        </div>
        
        <?php if ( has_post_thumbnail() ) { ?>
        <aside role="complementary">
            <figure class="content-image">
                <?php the_post_thumbnail( 'image image-border img-responsive' ); ?>
            </figure>
        </aside>
        <?php } ?>
    </article>
		
</section><!-- #post-## -->
