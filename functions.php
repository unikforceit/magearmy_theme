<?php
function twentytwentyone_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
    array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');
	//---------------------------------------------
	//main css
    function custom(){
        if (is_singular('download')) {
            wp_enqueue_style('Magearmy-swipper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
            wp_enqueue_script('Magearmy-swipper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', ['jquery'], '1.0.0', true);
            wp_enqueue_script('Magearmy-main', get_stylesheet_directory_uri() . '/js/script.js', ['jquery'], '1.0.0', true);
        }
        wp_enqueue_style('custom_css', get_stylesheet_directory_uri() .'/css/main.css');

    }
    add_action('wp_enqueue_scripts','custom');


    /* blog page short discription (excerpt) length = 20 */
    function wpdocs_custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    // Replaces the excerpt "Read More" text by a link
    function new_excerpt_more($more) {
           global $post;
        return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    /*--add sidebar--*/
    if ( function_exists('register_sidebar') )
 
        register_sidebar( array(
         
        'name' => __( 'Custom Sidebar'),
         
        'id' => 'custom-sidebar',
         
        'description' => __( 'A custom sidebar'),
         
        'before_widget' => '',
         
        'after_widget' => "",
         
        'before_title' => '',
         
        'after_title' => '',
         
    ));


remove_filter( 'the_content', 'edd_after_download_content' );

function magearmy_avarage_rating() {
    // make sure edd reviews is active
    if ( ! function_exists( 'edd_reviews' ) )
        return;

    $edd_reviews = edd_reviews();
    // get the average rating for this download
    $average_rating = $edd_reviews->average_rating( false );
    $count_rating = !empty($edd_reviews->count_ratings()) ? $edd_reviews->count_ratings() : 0;

    ob_start();
    if (!empty($count_rating)){
    ?>
    <span class="label"><span>Rating:</span>
    <span class="average-rating"><?php echo "( $count_rating )";?></span>
    <span class="edd-review-meta-rating">
        <?php
        for ( $i=0; $i < $average_rating; $i++) {
            echo '<span class="dashicons dashicons-star-filled"></span>';
        }for ( $x = $average_rating; $x - 5; $x++) {
            echo '<span class="dashicons dashicons-star-empty"></span>';
        }
        ?>
    </span>
    <?php
    } else {
        ?>
        <a href="<?php the_permalink();?>#edd-reviews">Add Ratings</a>
        <?php
    }
    $rating_html = ob_get_clean();
    return $rating_html;
}
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_634a893583d34',
        'title' => 'Download Gallery',
        'fields' => array(
            array(
                'key' => 'field_634a89364b3ba',
                'label' => 'Download Gallery',
                'name' => 'download_gallery',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'download',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

endif;
