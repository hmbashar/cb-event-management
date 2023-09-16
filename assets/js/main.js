jQuery(document).ready(function($) {
    $('.cbem-sponsor-logo-wrapper').on('click', function() {
        //ajax call
        $.ajax({
            url:$(this).data("ajax-url"),
            type: "POST",
            data: {
                action: "cbem_get_sponsor_details",
                id:$(this).data("id")
            },
            success: function(response) {
                $('.cbem-popup-wrapper').fadeIn();
            }
        });
    });


    //popup close button
    $('.cbem-popup-close, .cbem-popup-hide').on('click', function() {
        $('.cbem-popup-wrapper').fadeOut();
    })
});