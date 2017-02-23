(function($) {
    $(document).ready(function() {
        $('#popup-newsletter-modal').modal();
        $('#popup-newsletter-confirmation').modal();

        $('#popup-newsletter-confirmation-close').click(function() {
            $('#popup-newsletter-confirmation').modal('close');
        });
    });
    $(window).on('load', function() {
        var isModalDisplayed = localStorage.getItem('nlmodal-displayed');
        if (location.pathname.match(/thanks/) && !isModalDisplayed) {
            isModalDisplayed = true;
            localStorage.setItem('nlmodal-displayed', '1');
        }

        if (location.pathname.match(/product.weekly-affirmations/) ||
            location.pathname.match(/cart/) ||
            location.pathname.match(/checkout/)) {
            return;
        }
        
        if (!isModalDisplayed) {
            localStorage.setItem('nlmodal-displayed', '1');
            $('#popup-newsletter-modal').modal('open');
        }
    });
})(jQuery);
