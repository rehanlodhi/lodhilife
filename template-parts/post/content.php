<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Lodhi Life
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php

        if ( is_page() ) {
            the_title( '<h2 class="entry-title">', '</h1>' );
        }

        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail( 'full' );
        }
		if ( 'post' === get_post_type() ) {

			
			echo '<div class="post-meta">';
				if ( is_single() ) {
					lodhilife_posted_on();
					lodhilife_get_category();
				}
			
			echo '</div><!-- .post-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} 
	?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content();?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->