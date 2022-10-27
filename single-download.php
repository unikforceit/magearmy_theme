<?php
/**
 * The template for displaying all single downloads.
 *
 * @package Vendd
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post();

                    get_template_part('template/content-single', 'download');

                    // comments on downloads? (customizer)
                     if ( class_exists( 'EDD_Reviews' ) ) {
                        global $post;
                        $user = wp_get_current_user();
                        $user_id = ( isset( $user->ID ) ? (int) $user->ID : 0 );

                        if ( ! edd_reviews()->is_review_status( 'disabled' ) ) {
                            ?>
                            <div class="magearmy-review-section reviews-section">
                                <div class="comments">
                                    <div class="comments-wrap">
                                        <?php
                                        if ( get_option( 'thread_comments' ) ) {
                                            edd_get_template_part( 'reviews-reply' );
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        } endwhile; // end of the loop. ?>

            </main><!-- #main -->
        </div>
    </div><!-- #primary -->


<?php
get_footer(); ?>