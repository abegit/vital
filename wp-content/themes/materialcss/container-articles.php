  <div style="padding:40px 1px;" id="articles"><div class="container">
    <div class="section">

      
      <h3 class="red-text">Read Our <span>Articles</span></h3>
      <div class="row" id="articles-post-loop" class="post-loop">
            <?php $cPost = new WP_Query();
            $cPostSettings = array(
                'category__not_in' => array( 5 ),
                'posts_per_page' => 8,
                'showposts' => 8,
                'paged' => get_query_var('page')
            );
                    $cPost->query($cPostSettings); ?>                  
            <?php if ($cPost->have_posts()) : while($cPost->have_posts()) : $cPost->the_post(); ?>
            <div class="s12 m6 col post">
                 <?php $video = get_post_meta($post->ID, 'post_video', true ); ?>

                 <div class="card no-shadow">
                    <a class="card-image darken-4 grey waves-effect waves-block waves-light<?php if($video != '') {?> modal-trigger" href="#modal<?php echo $post->ID; } ?>" href="<?php the_permalink(); ?>">
                      <!-- <a class="" href="> -->
                        <?php if ( has_post_thumbnail() ) { 
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                            $thumb_url = $thumb_url_array[0]; ?>
                            <img src="<?php echo $thumb_url; ?>">
                        <?php } ?>
                        <!-- </a> -->
                    </a>
                      <div class="card-content grey lighten-4">
                      <span class="card-title grey-text text-darken-4"><i class="material-icons right activator">more_vert</i>
                        <a href="<?php the_permalink(); ?>" class="grey-text text-darken-4"><?php the_title(); ?></a></span>
                      <p><?php echo the_excerpt(); ?>
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
                                <?php $id = explode( 'watch?v=', $query_splited[1] ); ?>
                               <!-- <a class="modal-trigger" data-id="<?php echo $id[1]; ?>" href="#modal<?php echo $post->ID; ?>">Watch Video</a> -->
                            <?php } ?>
                        <?php } ?>
                        <!-- <a href="<?php the_permalink() ?>">Read More</a> --></p>
                    </div> <!-- card-content -->
                    <div class="card-reveal white-text grey darken-1">
                      <span class="card-title grey-text text-lighten-4"><i class="material-icons right">close</i><?php the_title(); ?></span>
                      <p><?php echo do_shortcode('[ssba url="'.get_permalink().'" title="'.get_the_title().'"]'); ?></p>
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
                               <div class="videoWrapper">
                                    <div class='video-container'>
                                        <iframe class="ytplayer" id="videomodal<?php echo $post->ID; ?>" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/<?php echo $query_splited[1]; ?>&enablejsapi=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                        <img src="<?php echo $thumb_url; ?>" alt="">
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
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
                    'total' => $cPost->max_num_pages
                ) ); ?>
            </div><?php endif; ?>
      </div> <!-- end row post-loop -->

    </div> <!-- end section -->
  </div> <!-- end container -->
</div>




