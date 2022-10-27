<?php
/**
 * The default template for download page content
 *
 * @package Vendd
 */

$download_id = get_the_ID();
$price = edd_get_download_price(get_the_ID());
$freetext = 'Free';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-3">
            <div class="product-image-review-section">
                <div class="product-base-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="product-reviews-summary">
                    <div class="rating-summary">
                        <?php echo magearmy_avarage_rating(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="product-short-description-block">
                <div class="page-title-wrapper">
                    <h1>
                        <span class="base" data-ui-id="page-title-wrapper" itemprop="name"><?php the_title(); ?></span>
                    </h1>
                </div>

                <div class="attribute overview">
                    <div class="value" itemprop="description">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-info-main">
                <div class="marketplace-approval">
                    <a target="_blank" href="#" title="">
                        <i class="fas fa-shield-alt"></i>
                        <span>Verified &amp; Approved by <b>WordPress Marketplace</b></span>
                    </a>
                </div>
                <div class="product-info-price">
                    <div class="price-box price-final_price" data-role="priceBox" data-product-id="18"
                         data-price-box="product-id-18">
                        <?php
                        if (edd_has_variable_prices($download_id)) {
                            echo '<h3 class="plan-title">' . edd_price_range($download_id) . '</h3>';
                        } else {
                            edd_price($download_id);
                        }
                        echo edd_get_purchase_link();
                        ?>

                    </div>
                </div>
                <div class="product-add-form">

                </div>


                <div class="product-features">
                    <ul>
                        <li>
                            <a href="terms-conditions#refund" target="_blank">
                                <span class="dark">45</span> Days Money Back*
                            </a>
                        </li>
                        <li class="free-support">
                            <span class="dark">90</span> Days Free Support
                        </li>
                        <li>
                            <span class="dark">Free</span> Lifetime Updates
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="product-media">
        <div class="product-media-wrapper swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
               <?php
               if ( class_exists( 'ACF' ) ) {
                $images = get_field('download_gallery');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ) { ?>
                   <?php foreach( $images as $image_id ) { ?>
                    <div class="swiper-slide">
                        <?php echo wp_get_attachment_image( $image_id['id'], $size ); ?>
                    </div>
                    <?php }
                    }
               }
               ?>
            </div>
            <!-- If we need pagination -->
            <!--     <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <div class="product-details">
        <?php the_content();?>
    </div>
</article>