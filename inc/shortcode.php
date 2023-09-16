<?php
//register shortcode for speaker popup
add_shortcode('cbem-speaker-popup', 'cbem_speaker_popup');

function cbem_speaker_popup()
{

    ?>

    <div class="cbem-popup-wrapper h-screen w-screen fixed z-10 left-0 top-0 flex justify-center items-center">
        <div class="container mx-auto relative z-10 bg-white rounded p-5">
            <div class="cbem-popup-close absolute -right-3 -top-5">
                <a href="#" class="text-white "><i class="eicon-close-circle"></i></a>
            </div>
            <h2 class="font-bold text-3xl mb-3">Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta nihil fugiat officiis dolores, in animi
                necessitatibus veniam, odit repellat aspernatur? Consequuntur blanditiis sint ut repellendus consectetur
                rerum autem quibusdam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta nihil fugiat officiis dolores, in animi
                necessitatibus veniam, odit repellat aspernatur? Consequuntur blanditiis sint ut repellendus consectetur
                rerum autem quibusdam?</p>

            <a href="#">Link</a>
        </div>
    </div>

    <?php
}