var $d = jQuery.noConflict();
  $d(document).ready(function(){

    // $('.button-collapse').sideNav();
    // $('.parallax').parallax();
    // $(window).load(function() {
	    // $('.modal-trigger').modal();
    	// console.log('yes');
		// $('#modal1').modal('open');
		// $('.modal-trigger').leanModal();
		$('#s').on("focus", function(){
			 // get the clock 
			    // also get the clock button, so we can change what it says 
			    var searchClose = document.getElementById('searchClose');
				
				// get the current value of the clock's display property 
			    var displaySetting = searchClose.style.display;

			    $(this).focus();
			    // now toggle the clock and the button text, depending on current state
			    if (displaySetting == 'block') { 
			      // clock is visible. hide it
			      searchClose.style.display = 'none';
			      // change button text
			      // searchClose.innerHTML = 'Show clock';
			    }
			    else { 
			      // clock is hidden. show it 
			      searchClose.style.display = 'block';
			      // change button text
			      // searchClose.innerHTML = 'Hide clock';
			    }
			  } 
		});
function toggleClock() { 
    // get the clock 
    // also get the clock button, so we can change what it says 
    var searchClose = document.getElementById('searchClose');
	
	// get the current value of the clock's display property 
    var displaySetting = searchClose.style.display;

    this.focus();
    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') { 
      // clock is visible. hide it
      searchClose.style.display = 'none';
      // change button text
      // searchClose.innerHTML = 'Show clock';
    }
    else { 
      // clock is hidden. show it 
      searchClose.style.display = 'block';
      // change button text
      // searchClose.innerHTML = 'Hide clock';
    }
  } 
  // }); // end of document ready
}); // end of document ready


 