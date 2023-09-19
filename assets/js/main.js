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

                // let data = JSON.parse(response);

                // $('#cbem-popup-content').html('<div class="sponsor-popup-details"><h3 class="font-bold text-3xl mb-2">'+data.post_title+'</h3><p>'+data.post_content+'</p></div>');

                $('#cbem-popup-content').html(response);

                $('.cbem-popup-wrapper').fadeIn();
            }
        });
    });


    //popup close button
    $('.cbem-popup-close, .cbem-popup-hide').on('click', function() {
        $('.cbem-popup-wrapper').fadeOut();
    })
});