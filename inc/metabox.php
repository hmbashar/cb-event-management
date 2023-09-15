<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    
    // Set a unique slug-like ID for schedual
    $prefix = 'cbem_schedule_metabox';

    //
    // Create a metabox
    CSF::createMetabox(
        $prefix,
        array(
            'title' => 'Options',
            'post_type' => 'schedule',
            'data_type' => 'unserialize',
        )
    );

    //
    // Create a section
    CSF::createSection(
        $prefix,
        array(
            'fields' => array(

                // A date field
                array(
                    'id' => 'date',
                    'type' => 'date',
                    'title' => 'Date',
                ),

                //start time
                array(
                    'id' => 'start_time',
                    'type' => 'datetime',
                    'title' => 'Start Time',
                    'subtitle' => 'Only Time',
                    'settings' => array(
                        'noCalendar' => true,
                        'enableTime' => true,
                    ),
                ),

                //end time
                array(
                    'id' => 'end_time',
                    'type' => 'datetime',
                    'title' => 'End Time',
                    'subtitle' => 'Only Time',
                    'settings' => array(
                        'noCalendar' => true,
                        'enableTime' => true,
                    ),
                ),

                // Select with speakers
                array(
                    'id' => 'speakers',
                    'type' => 'group',
                    'title' => 'Speakers',
                    'button_title' => 'Add Speaker',
                    'fields' => array(
                        [
                            'id' => 'speaker',
                            'type' => 'select',
                            'title' => 'Speaker',
                            'options' => 'post',
                            'query_args' => array(
                                'post_type' => 'speaker',
                                'posts_per_page' => -1,
                            ),
                        ]
                    )
                ),

                // Select with speakers
                array(
                    'id' => 'materials',
                    'type' => 'group',
                    'title' => 'Materials',
                    'button_title' => 'Add Material',
                    'fields' => array(
                        //title
                        [
                            'id' => 'title',
                            'type' => 'text',
                            'title' => 'Title',
                        ],
                        //thumbnail
                        [
                            'id' => 'thumbnail',
                            'type' => 'media',
                            'title' => 'Thumbnail',
                        ],
                        //thumbnail
                        [
                            'id' => 'description',
                            'type' => 'textarea',
                            'title' => 'Description',
                        ],
                        //Link
                        [
                            'id' => 'link',
                            'type' => 'link',
                            'title' => 'Link',
                        ],
                    )
                ),

            )
        )
    );



    
    // Set a unique slug-like ID for person
    $prefix = 'cbem_person_metabox';

    // Create a metabox
    CSF::createMetabox(
        $prefix,
        array(
            'title' => 'Options',
            'post_type' => 'person',
            'data_type' => 'unserialize',
        )
    );

    //
    // Create a section
    CSF::createSection(
        $prefix,
        array(
            'fields' => array(

                // Select person type
                array(
                    'id' => 'type',
                    'type' => 'select',
                    'title' => 'Type',
                    'options' => [
                        'guest' => 'Guest', 
                        'organizer' => 'Organizer',
                        'volunteer' => 'Volunteer'
                    ]
                ),

                // social profiles
                array(
                    'id' => 'social_profiles',
                    'type' => 'group',
                    'title' => 'Social Profiles',
                    'button_title' => 'Add Social Profile',
                    'fields' => array(

                        //icon
                        [
                            'id' => 'icon',
                            'type' => 'icon',
                            'title' => 'Icon',
                        ],

                        //link
                        [
                            'id' => 'link',
                            'type' => 'link',
                            'title' => 'Link',
                        ],
                    )
                ),

            )
        )
    );

    
    // Set a unique slug-like ID for speaker
    $prefix = 'cbem_speaker_metabox';

    // Create a metabox
    CSF::createMetabox(
        $prefix,
        array(
            'title' => 'Options',
            'post_type' => 'speaker',
            'data_type' => 'unserialize',
        )
    );

    //
    // Create a section
    CSF::createSection(
        $prefix,
        array(
            'fields' => array(
                // social profiles
                array(
                    'id' => 'social_profiles',
                    'type' => 'group',
                    'title' => 'Social Profiles',
                    'button_title' => 'Add Social Profile',
                    'fields' => array(

                        //icon
                        [
                            'id' => 'icon',
                            'type' => 'icon',
                            'title' => 'Icon',
                        ],

                        //link
                        [
                            'id' => 'link',
                            'type' => 'link',
                            'title' => 'Link',
                        ],
                    )
                ),

            )
        )
    );


}