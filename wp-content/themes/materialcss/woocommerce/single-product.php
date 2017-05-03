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

<div style="<?php if (is_home()) {?> display: none;<?php } ?>"><div class="container">
    <div class="section">

      <div class="row">
        <div class="s12 m12 l8 col content">
        
              <div class="post-content">
                  <h1 class="title"><?php the_title(); ?></h1>
                <?php do_action( 'woocommerce_before_main_content' ); ?>
                  <?php if ( have_posts() ) : ?>
                    <?php do_action( 'woocommerce_before_shop_loop' ); ?>
                    <?php woocommerce_product_loop_start(); ?>
                    <?php woocommerce_product_subcategories(); ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <?php wc_get_template_part( 'content', 'single-product' ); ?>
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