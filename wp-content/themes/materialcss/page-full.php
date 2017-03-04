<?php
/*
Template Name: Full Width
*/
 get_header(); ?>

<?php 
// setup
$thumb_present = has_post_thumbnail();
$content_width = (is_page('about') == true ? 's12 m8 l9' : 's12'); // returns true

 ?>
  


  <?php if ( $thumb_present ) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0];
    ?>
  <div class="parallax-container">
    <?php } ?>
    <?php if (is_page('about')) { ?>
    <div class="container black-text">
      <div class="section">
        <div class="row">
            <div class="s12 col center">
              <h2>Mystical Kabbalist. Spiritual Advisor. Coach. Teacher</h2>
              <span class="script">Eliyahu Jian</span>
            </div>
        </div>
      </div>
    </div>
    <div class="grey section">
      <div class="container">
        <div class="row">
          <div class="l8 push-l2 m8 push-m2 s12 col center">
            <p>For nearly three decades, Eliyahu Jian has been building men and women to strengthen their relationships, improve their businesses and embrace a healthier lifestyle while connecting to a higher power and purpose.</p>
          </div>
        </div>
      </div>
    </div>
    <?php } elseif ($thumb_present ) { ?>
    <div class="container black-text">
      <div class="section">
        <div class="row">
            <div class="s12 col center">
              <h1 class="title"><?php the_title(); ?></h1>
            </div>
        </div>
      </div>
    </div>
    <?php } ?>
  <?php if ( $thumb_present ) { ?>
    <div class="parallax"><img src="<?php echo $thumb_url; ?>"></div>
  </div>
 <?php } ?>

  <div <?php if (is_home()) {?>style="display: none;" <?php } ?><?php if (is_page('about')) { ?>class="parallax-container"<?php } ?>><div class="container black-text">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        
        <?php if (is_page('about')) { ?>
          <div class="col m4 l3 s12">
            <img src="http://vitaltransformation.org/staging/8724/wp-content/uploads/2017/03/eliyahu-jian.jpg" alt="Eliyahu Jian" width="100%">
            <p>Eliyahu’s aim is to create profound experiences for men and women who want to embrace a life filled with their deepest desires.</p>
          </div>
        <?php } ?>

  
        <div class="col content <?php echo $content_width; ?>">
        <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
                <div class="post-content">
                  <?php if (!$thumb_present ) { ?><h1 class="title"><?php the_title(); ?></h1><?php } ?>
                  <?php the_content('More...');?>
                </div>
        <?php endwhile; ?>
            <?php else : ?>
                    <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
      </div>
        <div class="s12 col sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Article Sidebar') ) : ?>
        <?php endif; ?>
      <?php if (!in_category('5')) {
          // get_template_part('widget','videos');
         } ?>
        </div>
      </div>

    </div>
  </div> <!-- end container -->
  
  <?php if (is_page('about')) { ?>
    <div class="parallax"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vital-transformation-about-blur.jpg"></div>
  <?php } ?>

  </div>

<?php get_footer(); ?>
