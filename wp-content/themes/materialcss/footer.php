  <footer class="page-footer black">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><img width="121" height="50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/eliyahu-logo.svg" alt="Eliyahu Jian"></h5>
          <p class="grey-text text-lighten-4"><?php bloginfo('description'); ?></p>
                  <!-- Modal Trigger -->
          <!-- Modal Structure -->
          <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Modal Header</h4>
              <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
            </div>
          </div>


        </div>
        <div class="col l3 s12">
          <!--
          <h5 class="white-text">Latest Videos</h5>
          <ul>
            <?php $fVPost = new WP_Query();
             $fVPostSettings = array(
                'category_name' => 'videos',
                'posts_per_page' => 4,
                'showposts' => 4,
                'orderby'=> 'date',
                'paged' => get_query_var('page')
            );
                    $fVPost->query($fVPostSettings); ?>                  
            <?php if ($fVPost->have_posts()) : while($fVPost->have_posts()) : $fVPost->the_post(); ?>
             <li><a class="white-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
             <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          -->
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Follow us on Facebook</h5>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEliyahuJian%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          <!-- <ul>
            <?php $fPost = new WP_Query();
            $fPostSettings = array(
                'category__not_in' => array( 5 ),
                'posts_per_page' => 4,
                'showposts' => 4,
                'paged' => get_query_var('page')
            );
                    $fPost->query($fPostSettings); ?>                  
            <?php if ($fPost->have_posts()) : while($fPost->have_posts()) : $fPost->the_post(); ?>
             <li><a class="white-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
             <?php endwhile; ?>
            <?php endif; ?>
            <!-- <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li> -->
          </ul> -->
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container grey-text text-darken-2">
        <a class="grey-text text-lighten-1" href="/">Home</a> - 
        <!--<a class="grey-text text-lighten-1" href="/category/videos">Videos</a> - -->
        <a class="grey-text text-lighten-1" href="/contact">Contact</a> - 
        <a class="grey-text text-lighten-1" href="/privacy-policy">Privacy Policy</a> - 
        <a class="grey-text text-lighten-1" href="/terms-of-service">Terms of Service</a> - 
        <a class="grey-text text-lighten-1" href="/product/weekly-affirmations">Weekly Affirmations</a> - 
        <a class="grey-text text-lighten-1" href="/downloads/daily-affirmations">E-Book</a>
        <span class="grey-text text-lighten-1 right">&copy; 2017 by Eliyahu Jian</span>
        <!-- <button class="modal-trigger waves-effect waves-light btn right grey darken-4" data-target="modal1">Contribute</button> -->
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/materialize.js"></script>
   <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->
  <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/init.js"></script>-->
  <script>
  var $d = jQuery.noConflict();
  $d(document).ready(function(){

    $d('.button-collapse').sideNav();
    $d('.parallax').parallax();


    $d('#menu-left #s').on("focus", function(){
       // get the clock 
          // also get the clock button, so we can change what it says 
          var searchClose = $d('#menu-left #searchClose');
        
        // get the current value of the clock's display property 
          // var displaySetting = searchClose.style.display;
          $d('#menu-left').toggleClass('close');
          $d(this).attr('placeholder','Start Typing');
          // $d(this).focus();
          // now toggle the clock and the button text, depending on current state
          if (searchClose.is(":visible")) { 
            // clock is visible. hide it
            searchClose.hide();
            // change button text
            // searchClose.innerHTML = 'Show clock';
          }
          else { 
            // clock is hidden. show it 
            searchClose.show();
            // change button text
            // searchClose.innerHTML = 'Hide clock';
          }

    });

$d('#menu-left #s').on("blur", function(){
       // get the clock 
          // also get the clock button, so we can change what it says 
          var searchClose = $d('#menu-left #searchClose');
        
        // get the current value of the clock's display property 
          // var displaySetting = searchClose.style.display;
          $d('#menu-left').toggleClass('close');
          $d(this).attr('placeholder','Search');
          // $d(this).focus();
          // now toggle the clock and the button text, depending on current state
          if (searchClose.is(":visible")) { 
            // clock is visible. hide it
            searchClose.hide();
            // change button text
            // searchClose.innerHTML = 'Show clock';
          }
          else { 
            // clock is hidden. show it 
            searchClose.show();
            // change button text
            // searchClose.innerHTML = 'Hide clock';
          }

    });

$d('#searchClose').on("click", function(){
  $d('#s').attr('value','');
});



    $d(window).load(function() {
      // $d('.modal').modal();

      // var yt_int, yt_players={},
      //   initYT = function() {
      //       $d(".ytplayer").each(function() {
      //           yt_players[this.id] = new YT.Player(this.id);
      //           console.log(yt_players[this.id]);
      //       });      
      //   };


    

    // $d.getScript("//www.youtube.com/player_api", function() {
    //     yt_int = setInterval(function(){
    //         if(typeof YT === "object"){
    //             initYT();
    //             clearInterval(yt_int);
                $d('.modal').not('#popup-newsletter-modal').modal({
                  dismissible: true, // Modal can be dismissed by clicking outside of the modal
                  opacity: .89, // Opacity of modal background
                  in_duration: 300, // Transition in duration
                  out_duration: 200, // Transition out duration
                  starting_top: '4%', // Starting top style attribute
                  ending_top: '10%', // Ending top style attribute
                  ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    // alert("Ready");
                    // console.log(modal, trigger);
                    // console.log(trigger.attr('data-id'));
                    var frameYT = '<div class="videoWrapper"><div class="video-container"><iframe id="video'+modal.attr('id')+'" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/'+trigger.attr('data-id')+'?enablejsapi=1&autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>';
                    modal.find('.modal-content').html(frameYT);
                    // toggleVideo('show',modal);
                    // var chosen = 'video'+modal.attr('id');
                    // console.log(chosen);
                    // console.log(yt_players['videomodal12']);
                    // yt_players['videomodal12'].playVideo();
                  },
                  complete: function(modal) {
                    // alert('Closed');
                    modal.find('.modal-content').html('');
                    // toggleVideo('hide',modal);
                  } // Callback for Modal close
                });
    //         }
    //     },500);
    // });
    // $d('#play').on('click', function(){
    //   yt_players['player1'].playVideo();
    // });
    // $d('#pause').on('click', function(){
    //   yt_players['player1'].pauseVideo();
    // });


    


    var toggleVideo = function(state,modal) {
      // if state == 'hide', hide. Else: show video
      var div = document.getElementById(modal.attr('id'));
      // console.log(modal);
      console.log(window.frames["video"+modal.attr('id')]);
      var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
      console.log(div.getElementsByTagName("iframe")[0].contentWindow);
      // var iframe = window.frames["video"+modal.attr('id')];
      // div.style.display = state == 'hide' ? 'none' : '';
      // func = state == 'hide' ? 'pauseVideo' : 'playVideo';
      func = 'pauseVideo';
      iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
  };

    // $d(".modal").openModal({
    //     complete : onModalHide('your_parameter')
    // });
     

  }); // end of document ready
}); // end of document ready


  </script>

<style>
</style>

<div id="popup-newsletter-modal" class="modal modal-fixed-footer newsletter-modal">
    <h3>Join Our Community</h3>
    <h4>Sign up to receive updates about Eliyahu's future classes, events, energy trips and more!</h4>

    <!-- <form class="newsletter-form" action="/?na=s" method="post" class="row newsletter-form">
        <div class="input-field">
            <label for="popup_email" data-error="This email address seems invalid." class="">Type Your Email Address</label>
            <input id="popup_email" type="email" name="ne" class="validate" required/>
        </div>
        <button type="submit" class="btn-large waves-effect waves-light waves-input-wrapper">Sign Up</button>
    </form> -->
    <form class="newsletter-form-ajax" class="row newsletter-form">
        <div class="input-field">
            <label for="popup_email" data-error="This email address seems invalid." class="">Type Your Email Address</label>
            <input id="popup_email" type="email" name="ne" class="validate newsletter-email" required/>
        </div>
        <button type="submit" class="btn-large waves-effect waves-light waves-input-wrapper">Sign Up</button>
    </form>
</div>

<div id="popup-newsletter-confirmation" class="modal modal-fixed-footer newsletter-modal">
    <h3>Thanks for subscribing!</h3>
    <h4>Look out for emails from us in the future!</h4>
    <button id="popup-newsletter-confirmation-close" type="button" class="btn-large waves-effect waves-light waves-input-wrapper">Close</button>
</div>

<script src="/wp-content/themes/materialcss/js/newsletter.js"></script>

<?php wp_footer(); ?>
  </body>
</html>
