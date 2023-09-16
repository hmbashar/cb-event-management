<?php
//register shortcode for speaker popup
add_shortcode('cbem-speaker-popup', 'cbem_speaker_popup');

function cbem_speaker_popup()
{

    ?>

    <div style="display:none" class="cbem-popup-wrapper h-screen w-screen fixed z-10 left-0 top-0 flex justify-center items-center">
        <div class="fixed w-full h-full bg-black opacity-80 z-0 cbem-popup-hide"></div>
        <div class="container mx-auto relative z-10 bg-white rounded p-5">
            <div class="cbem-popup-close absolute -right-3 -top-5 text-white cursor-pointer">
                <i class="eicon-close-circle"></i>
            </div>


            <div id="cbem-popup-content"></div>
        </div>
    </div>

    <?php
}