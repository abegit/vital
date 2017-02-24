<div id="intro" class="black-text parallax-container">
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
            <div class="s12 col center">
<h1>Reach Your Potential</h1>
<span class="script">Eliyahu Jian</span>
            </div>
      </div> <!-- end row post-loop -->

    </div> <!-- end section -->
  </div>


<div class="center grey section">
  <div class="container row">
  <div class="col s12 m4 push-m2">
  <p class="script">Download My</p>
  <a href="/e-books/" class="btn waves-effect waves-light grey-text text-darken-4">E-Book</a>

</div>
    <div class="col s12 m4 push-m2">
  <p class="script">Like what you see</p>
  <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-twitter grey-text text-darken-4"></i></a>
  <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-facebook grey-text text-darken-4"></i></a>
  <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-linkedin grey-text text-darken-4"></i></a>
</div>

</div>
  </div> <!-- end container -->
  <div class="parallax"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vital-transformations-mt-fuji.jpg" alt="Vital Transformation"></div>
</div>
<div style="border-top: 4px solid rgb(237, 121, 37); padding: 50px 0px;" class="grey darken-4 grey-text text-lighten-1"><div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
            <div class="s12 col">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) : ?>
                <?php endif; ?>
            </div>
      </div> <!-- end row post-loop -->

    </div> <!-- end section -->
  </div> <!-- end container -->
</div>

<div id="modalintro" class="modal">
    <div class="modal-content">
      <!-- <h4>Modal Header</h4> -->
       <!-- <div class="videoWrapper">
            <div class='video-container'>
                <iframe class="ytplayer" id="videomodalintro" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/7ArPVbP72FU?t=29m54s" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div> -->
    </div>
    <div class="modal-footer">
      <?php echo do_shortcode('[ssba url="'.get_permalink().'" title="'.get_the_title().'"]'); ?><?php echo the_excerpt(); ?><a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
    </div>
  </div>
