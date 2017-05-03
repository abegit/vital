<?php get_header(); ?>
  <div id="content"><div class="container">
    <div class="section">

      <div class="row">
      <div class="s12 m12 l8 col content">
      <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
      <?php $video = get_post_meta($post->ID, 'post_video', true ); ?>
      <?php if ($video != '') {
                $thumb_url = 'https://img.youtube.com/vi/'.$id[1].'/hqdefault.jpg';
            } elseif ( has_post_thumbnail() ) {
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                $thumb_url = $thumb_url_array[0]; ?>
            <?php } ?> 
            <?php if($video != '') {
                            $query_split = explode("//", $video);
                            $query_splited = explode("/", $query_split[1]);
                            if ('vimeo.com' == $query_splited[0]) { ?>
                                <!-- <div class="videoWrapper">
                                    <div class='video-container'>
                                        <iframe title='Vimeo video player' width='400' height='275' src='https://player.vimeo.com/video/<?php echo $query_splited[1]; ?>' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div> -->
                            <?php } elseif( false !== strpos( $query_splited[0],'youtube.com' ) ) { ?>
                                <?php $id = explode( 'watch?v=', $query_splited[1] ); ?>
                               <div class="videoWrapper">
                                    <div class='video-container'>
                                        <iframe class="ytplayer" id="videomodal<?php echo $post->ID; ?>" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/<?php echo $id[1]; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                        <?php the_post_thumbnail('large', array('class' => 'hero')); ?>
                        <?php } ?>
              <div class="post-content">
                <h1 class="title"><?php the_title(); ?></h1>
              <?php the_content('More...');?>
              <?php echo do_shortcode('[ssba]'); ?>
            </div>
      <?php endwhile; ?>
          <?php else : ?>
                  <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>

        <div class="clear"></div> 
        </div> <!-- end .content -->
      <div class="s12 m12 l4 col sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Article Sidebar') ) : ?>
        <?php endif; ?>
        <?php 
        if (!in_category('5')) :
           //  get_template_part('widget','videos');
         endif; ?>     

      </div> <!-- end sidebar -->
      <div class="clear"></div>
      <?php wp_reset_query();
      if (in_category('5')) :
        echo "<div class='col'>";
         // get_template_part('widget','videos');
        echo "</div>";
         endif; ?>
      </div>

    </div>
  </div> <!-- end container -->
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
