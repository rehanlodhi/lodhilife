<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Lodhi Life
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="site-section">
    <div class="container">
        <div class="row blog-entries">
            <div class="main-content">
                <h2 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'lodhilife' ); ?></h2>

                <div class="row">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'lodhilife' ); ?>
                    </p>

                    <?php get_search_form(); ?>

                </div>
				</div>
				
                <?php get_sidebar(); ?>
        </div>
</section>
</div>

<?php get_footer();


