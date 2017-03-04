var $d = jQuery.noConflict();
  $d(document).ready(function(){
var request;
        $d(".newsletter-form-ajax").on("submit", function( event ) {
            if ( request ) {
                request.abort();
            }
            var
                $form = $d(this),
                $inputs = $form.find("input, select, button, textarea"),
                serializedData = $form.serialize();
            request = $d.ajax({
                url: js_config.ajax_url,
                type: 'post',
                data: {
                    action: 'ajax_subscribe',
                    nonce: js_config.ajax_nonce,
                    ne: $form.find('.newsletter-email').val(), //THIS IS IMPORTANT TO SUBMIT!! ITS REQUIRED BY THE subscribe() METHOD
                    nl: $form.find('.newsletter-list:checked').val(), //THIS IS IMPORTANT TO SUBMIT!! ITS REQUIRED BY THE subscribe() METHOD
                    data: serializedData
                },
                beforeSend: function () {
//disable all field
                    $inputs.prop( "disabled", true );
                },
                success: function ( response ) {
//we have an answer. it will be placed right after our form
                    //var text = $d( '<p class="newsletter-' + response.status + '">Thank you for subscribing!</p>' ).hide();
                    //$form.after( text ).next().slideDown();
                    $d('#popup-newsletter-modal').modal('close'); // close modal 
                    $d('#popup-newsletter-confirmation').modal('open');
                    //$('#popup-newsletter-modal').modal('open'); // open response
                    // maybe put the response inside of the above modal?
                },
                complete: function() {
//we are done, reenable all fields
                    $inputs.prop( "disabled", false );
                }
            });

            event.preventDefault();
        });
}); // end of document ready