<?php
/*
Template Name: Home
*/
 get_header(); ?>



  <div style="<?php if (is_page('home')) {?> display: none;<?php } ?>"><div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="s12 m12 l8 col content">
        <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
              <div class="post-content">
                  <h1 class="title"><?php the_title(); ?></h1>
                <?php the_content('More...');?>
              </div>
        <?php endwhile; ?>
            <?php else : ?>
                    <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
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
<?php if (is_page('home')) { 
get_template_part('container','intro'); 
 get_template_part('container','videos'); 
// get_template_part('container','articles'); 
} ?>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="s12 col">
        <h3 class="red-text">Check Back Later <span style="color: #6d6d6d">More Coming Soon</span></h3>
        <div class="center">
          <p>This website is meant to bring you spiritual knowledge in a way that directly applies to your life.  The guidance offered serves as a road map to keep you motivated, inspired and happy.  This content combines deep knowledge with life wisdom and common sense for business and everyday living.  Learning how to harness spiritual knowledge and inspiration will strengthen your relationships, encourage a healthier lifestyle and ultimately connect you to a higher power and purpose.</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div> -->

<?php get_footer(); ?>
