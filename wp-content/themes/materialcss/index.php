<?php get_header(); ?>
<?php if (is_home()) { 
get_template_part('container','intro');
get_template_part('container','introvideo');
get_template_part('container','newsletter');
get_template_part('container','classes');
// get_template_part('container','videos');
// get_template_part('container','articles'); 
} ?>
<div style="<?php if (is_home()) {?> display: none;<?php } ?>"><div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="s12 m8 col content">
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
        <div class="s12 m4 col sidebar">
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