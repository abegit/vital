  <div id="intro" style="background:#061625;" class="white-text"><div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
            <div class="s12 m6 col">
                 <h1 style="margin: 50px 0 0 0;">Hi, I’m Eliyahu Jian</h1>
<h2>Spiritual Advisor and Mystical Kabbalist</h2>
<h3>Consultant, Coach and Teacher</h3>
<p><!--My vision is to give people a chance to be the best that they can become in their life. I want to reach people through an intellectual, mystic  and psychic level.  I want to help people discover who they are.  -->I am not here to tell you what’s right or wrong, I’m here to help you reach your potential.</p>
<a href="/e-books/" class="btn waves-effect waves-light">View My E-Books</a>

            </div>
      </div> <!-- end row post-loop -->

    </div> <!-- end section -->
  </div> <!-- end container -->
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
