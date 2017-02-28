  <footer class="page-footer white black-text">
    <div class="container">
      <div class="row">
        <div class="col l3 s12">
          <h5 class="black-text">
            <i class="icon-vital-transformation"></i>
          </h5>
          <!-- <p class="grey-text text-lighten-4"><?php bloginfo('description'); ?></p> -->
        </div>
        <div class="col l6 s12">
          <nav class="no-shadow">
            <ul>
              <li>
                <a href="#">Classes</a>
              </li>
              <li>
                <a href="#">Videos</a>
              </li>
              <li>
                <a href="#">Events</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <a href="#">Donate</a>
              </li>
            </ul>
          </nav>        
        </div>
        <div class="col l3 s12 center">
          <span class="script">Like what you see</span><br>
            <!-- <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-twitter grey-text text-darken-4"></i></a> -->
            <a href="https://www.facebook.com/VitalTransformation52/" target="_blank" class="btn waves-effect waves-light btn-floating"><i class="sc-facebook grey-text text-darken-4"></i></a>
            <!-- <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-linkedin grey-text text-darken-4"></i></a> -->
        </div>
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
      $d('body').addClass('init');
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
    <h4>Sign up to receive updates from Vital Transformation's future classes, events, energy trips and more!</h4>

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

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/newsletter.js"></script>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope.js"></script>
<script>
  var $hashFix = jQuery.noConflict();
(function ($hashFix) {
  // $hashFix('.products .product').addClass('item');
  var $container = $hashFix('.row.classes');
  var colWidth = function () {
    var w = $container.width(), 
    columnNum = 1,
    columnWidth = 0;
    if (w > 900) {
          columnNum  = 3;
    }
    else if (w > 600) {
          columnNum  = 2;
    }
    else if (w > 300) {
          columnNum  = 1;
    }
    columnWidth = Math.floor(w/columnNum);
    $container.find('.single-class').each(function() {
      var $item = $hashFix(this),
      multiplier_w = $item.attr('class').match(/single-class-w(\d)/),
      multiplier_h = $item.attr('class').match(/single-class-h(\d)/),
      width = multiplier_w ? columnWidth*multiplier_w[1]-10 : columnWidth-10,
      height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-40 : columnWidth*0.5-40;
      $item.css({
        width: width,
          //height: height
        });
    });
    return columnWidth;
  },
  isotope = function () {
    $container.imagesLoaded( function(){
      $container.isotope({
        resizable: false,
        itemSelector: '.single-class',
        masonry: {
          columnWidth: colWidth(),
          gutterWidth: 20
        }
      });
      });
  };

  isotope();
  // console.log('tagged here');

  $hashFix(window).smartresize(isotope);
}(jQuery));
</script>
  </body>
</html>
