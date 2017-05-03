<div class="widget"><div class="textwidget">
      <?php if (in_category('5')) { 
      $medCol = 'm3 ';
      } else {
      $medCol = '';
      } ?>
      
      <h3 class="blue-text">Watch Our <span>Videos</span></h3>
      <div class="row" id="videos-post-loop" class="post-loop">
            <?php $cVideos = new WP_Query();
            $cVideoSettings = array(
                'category_name' => 'videos',
                'posts_per_page' => 8,
                'showposts' => 8,
                'orderby'=> 'date',
                'paged' => get_query_var('page')
            );
                    $cVideos->query($cVideoSettings); ?>                  
            <?php if ($cVideos->have_posts()) : while($cVideos->have_posts()) : $cVideos->the_post(); ?>
            <div class="s6 <?php if (isset($medCol)) { echo $medCol;} ?>col post">
                 <?php $video = get_post_meta($post->ID, 'post_video', true ); ?>

                 <div class="card no-shadow">
                  <?php if($video != '') {
                    $query_split = explode("//", $video);
                    $query_splited = explode("/", $query_split[1]);
                    $id = explode( 'watch?v=', $query_splited[1] );
                  } ?>
                    <a class="card-image waves-effect waves-block waves-light" href="<?php the_permalink(); ?>">
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
                                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                  </span><?php $id = explode( 'watch?v=', $query_splited[1] ); ?>
                                 <!-- <p><a class="modal-trigger" data-id="<?php echo $id[1]; ?>" href="#modal<?php echo $post->ID; ?>">Watch Video</a></p> -->
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Share: <?php the_title(); ?></span>
                      <p><?php echo do_shortcode('[ssba url="'.get_permalink().'" title="'.get_the_title().'"]'); ?><?php echo the_excerpt(); ?></p>
                    </div>
                  </div>
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

    </div>
    </div>