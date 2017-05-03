<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<?php 
// setup


    global $wp_query;
    $cat = $wp_query->get_queried_object();
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
    $thumb_present = wp_get_attachment_url( $thumbnail_id );
    //   if ( $thumb_present ) {
    //     echo '<img src="' . $thumb_present . '" alt="' . $cat->name . '" />';
    // }
$content_width = (is_page('about') == true ? 's12 m8 l9' : 's12'); // returns true

 ?>

  <?php if ( $thumb_present ) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0];
    ?>
  <div class="parallax-container">
    <?php } ?>
    <div class="container black-text">
      <div class="section">
        <div class="row">
            <div class="s12 col center">
              <h1 class="title">
                <?php if (apply_filters('woocommerce_show_page_title',true) ){
                // woocommerce_page_title();
                } ?>
                <?php $description = wc_format_content( term_description() );
                  if ( $description ) {
                      echo '<div class="term-description">' . $description . '</div>';
                  } ?>
              </h1>
              <span class="script">Eliyahu Jian</span>
            </div>
        </div>
      </div>
    </div>
  <?php if ( $thumb_present ) { ?>
    <div class="parallax"><img src="<?php echo $thumb_present; ?>"></div>
  </div>
 <?php } ?>





<div style="<?php if (is_home()) {?> display: none;<?php } ?>"><div class="container">
    <div class="section">

      <div class="row">
        <div class="s12 m12 l8 col content">
        
              <div class="post-content">
                  <h1 class="title"></h1>
                  <br>
                <?php do_action( 'woocommerce_before_main_content' ); ?>
                  <?php if ( have_posts() ) : ?>
                    <?php do_action( 'woocommerce_before_shop_loop' ); ?>
                    <?php woocommerce_product_loop_start(); ?>
                    <?php woocommerce_product_subcategories(); ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <?php wc_get_template_part( 'content', 'product' ); ?>
                  <?php endwhile; // end of the loop. ?>
                  <?php woocommerce_product_loop_end(); ?>
                  <?php do_action( 'woocommerce_after_shop_loop' ); ?>
                  <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                  <?php wc_get_template( 'loop/no-products-found.php' ); ?>
                  <?php endif; ?>
                           

                  <?php do_action( 'woocommerce_after_main_content' ); ?>

              </div>
        
      </div>
        <div class="s12 m12 l4 col sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Article Sidebar') ) : ?>
        <?php endif; ?>
      <?php if (!in_category('5')) {
           // get_template_part('widget','videos');
         } ?>     

      </div>
      </div>

    </div>
  </div> <!-- end container -->
  </div>
<?php get_footer(); ?>