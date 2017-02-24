<?php get_header(); ?>
  <div style="padding:40px 1px 0 1px;" id="videos"><div class="container">
    <div class="section">

      <!--   Icon Section   -->
  

      <h3 class="blue-text">Watch Our <span><?php if( is_home() ) {  echo get_bloginfo( 'description' ); }
  elseif (is_archive()) { echo single_cat_title(); }
  elseif (is_category() ) { echo the_title(); }
  elseif (is_singular('product') || is_page_template('page-enter.php')) {}
  // elseif (is_single() || is_page() || is_cart()) {}
  // elseif (is_404()) { echo "Sorry not found"; }
  // elseif (is_search()) {}
  else {echo the_title();
  } ?></span></h3>
      <div class="row" id="videos-post-loop" class="post-loop">
            <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
            <div class="s12 l3 m6 col post">
                 <?php $video = get_post_meta($post->ID, 'post_video', true ); ?>

                 <div class="card no-shadow">
                    <a class="card-image waves-effect waves-block waves-light<?php if($video != '') { $query_split = explode("//", $video); $query_splited = explode("/", $query_split[1]); $id = explode( 'watch?v=', $query_splited[1] );?> modal-trigger" data-id="<?php echo $id[1]; ?>" href="#modal<?php echo $post->ID; } ?>">
                      <!-- <a class="" href="> -->
                        <?php if ($video != '') { ?>
                        <img src="https://img.youtube.com/vi/<?php echo $id[1]; ?>/hqdefault.jpg" alt="">
                        <?php } elseif ( has_post_thumbnail() ) {
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                            $thumb_url = $thumb_url_array[0]; ?>
                            <img src="<?php echo $thumb_url; ?>">
                        <?php } ?>
                        <!-- </a> -->
                    </a>
                    <div class="card-content">
                        <?php       
                            if($video != '') {
                            $query_split = explode("//", $video);
                            $query_splited = explode("/", $query_split[1]);
                            if ('vimeo.com' == $query_splited[0]) { ?>
                                <!-- <div class="videoWrapper">
                                    <div class='video-container'>
                                        <iframe title='Vimeo video player' width='400' height='275' src='https://player.vimeo.com/video/<?php echo $query_splited[1]; ?>' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div> -->
                            <?php } elseif( false !== strpos( $query_splited[0],'youtube.com' ) ) { ?>
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right activator">more_vert</i>
                                  <a class="modal-trigger" data-id="<?php echo $id[1]; ?>" href="#modal<?php echo $post->ID; ?>"><?php the_title(); ?></a>
                                  </span><?php $id = explode( 'watch?v=', $query_splited[1] ); ?>
                                 <!-- <p><a class="modal-trigger" data-id="<?php echo $id[1]; ?>" href="#modal<?php echo $post->ID; ?>">Watch Video</a></p> -->
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php the_title(); ?></span>
                      <p><?php echo do_shortcode('[ssba url="'.get_permalink().'" title="'.get_the_title().'"]'); ?><?php echo the_excerpt(); ?></p>
                    </div>
                  </div>
                
               <div id="modal<?php echo $post->ID; ?>" class="modal">
                    <div class="modal-content">
                      <!-- <h4>Modal Header</h4> -->
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
                               <!-- <div class="videoWrapper">
                                    <div class='video-container'>
                                        <iframe class="ytplayer" id="videomodal<?php echo $post->ID; ?>" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/<?php echo $id[1]; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div> -->
                            <?php } ?>
                        <?php } else { ?>
                        <img src="<?php echo $thumb_url; ?>" alt="">
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                      <?php echo do_shortcode('[ssba url="'.get_permalink().'" title="'.get_the_title().'"]'); ?><?php echo the_excerpt(); ?><a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                  <!-- <a href="<?php the_permalink() ?>" data-transition="slide" title="Read More - <?php the_title_attribute(); ?>" class="title">
                    <div class="info">
                    <p><?php the_time('n M Y') ?><i class="icon-clockalt-timealt"></i></p>
                    </div>
                    <div class="content">
                    <h3></h3>
                    </div>
                  </a> -->
                              


                

                
            </div>
            <?php endwhile; ?>
            
            <div class="text-center button ani container clear">
                <?php $big = 999999999; // need an unlikely integer
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('page') ),
                    'total' => $cVideos->max_num_pages
                ) ); ?>
            </div><?php endif; ?>
      </div> <!-- end row post-loop -->

    </div> <!-- end section -->
  </div> <!-- end container -->
</div>
<?php get_footer(); ?>