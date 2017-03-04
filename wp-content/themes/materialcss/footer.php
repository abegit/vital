  <footer class="page-footer white black-text">
    <div class="container">
      <div class="row">
        <div class="col l2 s12">
          <h5 class="black-text">
            <i class="icon-vital-transformation"></i>
          </h5>
          <!-- <p class="grey-text text-lighten-4"><?php bloginfo('description'); ?></p> -->
        </div>
        <div class="col l6 s12">
          <nav class="no-shadow">
            <ul>
              <li>
                <a href="/shipping-return-policy/">Shipping & Returns</a>
              </li>
              <li>
                <a href="/privacy-policy">Privacy Policy</a>
              </li>
              <!-- <li class="disabled">
                <a href="#" class="disabled" style="pointer-events:none;">Classes</a>
              </li> -->
              <!-- <li class="disabled">
                <a href="#" class="disabled" style="pointer-events:none;">Videos</a>
              </li> -->
              <!-- <li class="disabled">
                <a href="#" class="disabled" style="pointer-events:none;">Events</a>
              </li> -->
              <!-- <li class="disabled">
                <a href="#" class="disabled" style="pointer-events:none;">About</a>
              </li> -->
              <!-- <li class="disabled">
                <a href="#" class="disabled" style="pointer-events:none;">Contact</a>
              </li> -->
              <!-- <li class="disabled">
                <a href="#" class="disabled" style="pointer-events:none;">Donate</a>
              </li> -->
            </ul>
          </nav>

        </div>
        <div class="col l4 s12 center">
          <span class="script">Like what you see</span><br>
            <!-- <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-twitter grey-text text-darken-4"></i></a> -->
            <a href="https://www.facebook.com/VitalTransformation.org/" target="_blank" class="btn waves-effect waves-light btn-floating"><i class="sc-facebook grey-text text-darken-4"></i></a>
            <!-- <a href="/e-books/" class="btn waves-effect waves-light btn-floating"><i class="sc-linkedin grey-text text-darken-4"></i></a> -->
        </div>
      </div>
    </div>
  </footer>
<?php /* Primary navigation */
        wp_nav_menu( array(
          'theme_location' => 'mobile',
          'container' => false,
          'menu_class' => 'side-nav hide',
          //Process nav menu using our custom nav walker
          'walker' => new wp_materialcss_navwalker())
        ); ?>
        <?php /* Primary navigation */
        wp_nav_menu( array(
          'theme_location' => 'mobile-search',
          'container' => false,
          'menu_class' => 'side-nav hide',
          //Process nav menu using our custom nav walker
          'walker' => new wp_materialcss_navwalker())
        ); ?>
<div id="donations" class="modal modal-fixed-footer newsletter-modal">
    <h3>Donations</h3>
    <p>Thank you for your interest in donating! Donations are tax deductible.  Click the button below to Donate via PayPal. Charges will appear on your statement from Eliyahu and Debbie's official organization, Vital Transformation.</p>
<div class="center"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
<input name="hosted_button_id" type="hidden" value="DW6BTGN97FSE4" />
<input title="PayPal - The safer, easier way to pay online!" alt="Donate" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" type="image" />
<img src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form></div>

</div>
<div id="popup-newsletter-modal" class="modal modal-fixed-footer newsletter-modal">
    <h3>Join Our Community</h3>
    <p>Sign up to receive updates from Vital Transformation about future classes, events, energy trips and more!</p>
    <form class="newsletter-form" class="row newsletter-form" method="post" action="/?na=s">
        <div class="input-field">
            <label for="popup_email" data-error="This email address seems invalid." class="">Type Your Email Address</label>
            <input id="popup_email" type="email" name="ne" class="validate newsletter-email" required/>
        </div>
        <input type="checkbox" id="nl1" name="nl[]" value="2" checked="" class="hide"><label for="nl1" class="hide"></label>
        <button type="submit" class="btn-large waves-effect waves-light waves-input-wrapper">Sign Up</button>
    </form>
</div>
<div id="popup-shabbat-modal" class="modal modal-fixed-footer newsletter-modal">
    <h3>Join Our Shabbat</h3>
    <p>Sign up to receive updates from Vital Transformation about future classes, events, energy trips and more!</p>
    <form class="newsletter-form" class="row newsletter-form" method="post" action="/?na=s">
        <div class="input-field">
            <label for="popup_email" data-error="This email address seems invalid." class="">Type Your Email Address</label>
            <input id="popup_email" type="email" name="ne" class="validate newsletter-email" required/>
        </div>
        <input type="checkbox" id="nl1" name="nl[]" value="2" checked="" class="hide"><label for="nl1" class="hide"></label>
        <button type="submit" class="btn-large waves-effect waves-light waves-input-wrapper">Sign Up</button>
    </form>
</div>
<div id="popup-weekly-modal" class="modal modal-fixed-footer newsletter-modal">
    <h3>Join Our Weekly Classes</h3>
    <p>Deep Teachings of Rabbi Issac Luria, Rabbi Chaim Vital and Rav Ashlag on the Study Before Creation. Every Thursday from 7-8 PM. $10.00</p>
    <form class="newsletter-form" class="row newsletter-form" method="post" action="/?na=s">
        <div class="input-field">
            <label for="popup_email" data-error="This email address seems invalid." class="">Type Your Email Address</label>
            <input id="popup_email" type="email" name="ne" class="validate newsletter-email" required/>
        </div>
        <input type="checkbox" id="nl1" name="nl[]" value="2" checked="" class="hide"><label for="nl1" class="hide"></label>
        <button type="submit" class="btn-large waves-effect waves-light waves-input-wrapper">Sign Up</button>
    </form>
</div>
<div id="popup-workshops-modal" class="modal modal-fixed-footer newsletter-modal">
    <h3>Join Our Community</h3>
    <p>Every Monday at 7pm join Eliyahu for an uplifting motivating class about the weekly consciousness that we can tap into.</p>
    <form class="newsletter-form" class="row newsletter-form" method="post" action="/?na=s">
        <div class="input-field">
            <label for="popup_email" data-error="This email address seems invalid." class="">Type Your Email Address</label>
            <input id="popup_email" type="email" name="ne" class="validate newsletter-email" required/>
        </div>
        <input type="checkbox" id="nl1" name="nl[]" value="2" checked="" class="hide"><label for="nl1" class="hide"></label>
        <button type="submit" class="btn-large waves-effect waves-light waves-input-wrapper">Sign Up</button>
    </form>
</div>

<div id="popup-newsletter-confirmation" class="modal modal-fixed-footer newsletter-modal">
    <h3>Thanks for subscribing!</h3>
    <p>Look out for emails from us in the future!</p>
    <button id="popup-newsletter-confirmation-close" type="button" class="btn-large waves-effect waves-light waves-input-wrapper">Close</button>
</div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/materialize.js"></script>
   <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>-->
  <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/init.js"></script>-->
  <script>
  var $d = jQuery.noConflict();

  <?php if (isset($_GET["nk"])) { ?>
    $d('#popup-newsletter-confirmation').modal({
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
                    // // // // // //  var frameYT = '<div class="videoWrapper"><div class="video-container"><iframe id="video'+modal.attr('id')+'" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/'+trigger.attr('data-id')+'?enablejsapi=1&autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>';
                    // // // // // //  modal.find('.modal-content').html(frameYT);
                    // toggleVideo('show',modal);
                    // var chosen = 'video'+modal.attr('id');
                    // console.log(chosen);
                    // console.log(yt_players['videomodal12']);
                    // yt_players['videomodal12'].playVideo();
                  },
                  complete: function(modal) {
                    // alert('Closed');
                    // // // // // //  modal.find('.modal-content').html('');
                    // toggleVideo('hide',modal);
                  } // Callback for Modal close
                });
    $d('#popup-newsletter-confirmation').modal('open');
  <?php } ?>


  $d(document).ready(function(){

    $d('.button-collapse').sideNav();
    $d('#menu-mobile').removeClass('hide');
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
                    // // // // // //  var frameYT = '<div class="videoWrapper"><div class="video-container"><iframe id="video'+modal.attr('id')+'" title="YouTube video player" width="400" height="275" src="https://www.youtube.com/embed/'+trigger.attr('data-id')+'?enablejsapi=1&autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>';
                    // // // // // //  modal.find('.modal-content').html(frameYT);
                    // toggleVideo('show',modal);
                    // var chosen = 'video'+modal.attr('id');
                    // console.log(chosen);
                    // console.log(yt_players['videomodal12']);
                    // yt_players['videomodal12'].playVideo();
                  },
                  complete: function(modal) {
                    // alert('Closed');
                    // // // // // //  modal.find('.modal-content').html('');
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/newsletter.js"></script>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope.js"></script>
<script>
  var $hashFix = jQuery.noConflict();
(function ($hashFix) {
  // // $hashFix('.products .product').addClass('item');
  // var $container = $hashFix('.row.classes');
  // var colWidth = function () {
  //   var w = $container.width(), 
  //   columnNum = 1,
  //   columnWidth = 0;
  //   if (w > 900) {
  //         columnNum  = 3;
  //   }
  //   else if (w > 600) {
  //         columnNum  = 2;
  //   }
  //   else if (w > 300) {
  //         columnNum  = 1;
  //   }
  //   columnWidth = Math.floor(w/columnNum);
  //   $container.find('.single-class').each(function() {
  //     var $item = $hashFix(this),
  //     multiplier_w = $item.attr('class').match(/single-class-w(\d)/),
  //     multiplier_h = $item.attr('class').match(/single-class-h(\d)/),
  //     width = multiplier_w ? columnWidth*multiplier_w[1]-10 : columnWidth-10,
  //     height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-40 : columnWidth*0.5-40;
  //     $item.css({
  //       width: width,
  //         //height: height
  //       });
  //   });
  //   return columnWidth;
  // },
  // isotope = function () {
  //   $container.imagesLoaded( function(){
  //     $container.isotope({
  //       resizable: false,
  //       itemSelector: '.single-class',
  //       masonry: {
  //         columnWidth: colWidth(),
  //         gutterWidth: 20
  //       }
  //     });
  //     });
  // };

  // isotope();
  // // console.log('tagged here');

  // $hashFix(window).smartresize(isotope);
}(jQuery));
</script>
  </body>
</html>
