<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class FLBasicExampleModule
 */
class FLSimpleVideo extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Simple Video', 'fl-builder'),
            'description'   => __('An basic module for Adding Video.', 'fl-builder'),
            'group'           => __( 'My Group', 'fl-builder' ),
            'category'		=> __('Simple Video', 'fl-builder'),
            'dir'           => FL_MODULE_SIMPLE_VIDEO_DIR . 'modules/simple-video/',
            'url'           => FL_MODULE_SIMPLE_VIDEO_URL . 'modules/simple-video/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        $this->add_js( 'jquery-event-move',   $this->url . 'js/jquery.event.move.js',   array( 'jquery' ) );

    }

    
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLSimpleVideo', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Video', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields

                    'video_type'       => array(
						'type'          => 'select',
						'label'         => __('Video Type', 'fl-builder'),
						'default'       => 'wordpress',
						'options'       => array(
							'media_library'     => __('Media Library', 'fl-builder')//,
							//'embed'             => __('Embed', 'fl-builder')
						),
						'toggle'        => array(
							'media_library'      => array(
								'fields'      => array('video', 'poster', 'autoplay', 'loop')
							),
							'embed'     => array(
								'fields'      => array('embed_code')
							)
						)
                    ),
                    
                    'video'          => array(
						'type'          => 'video',
						'label'         => __( 'Video  (Mp4)', 'fl-builder' )
					),

					'video-ogg'          => array(
						'type'          => 'video',
						'label'         => __( 'Video (ogg) ', 'fl-builder' )
					),
					'poster'         => array(
						'type'          => 'photo',
						'label'         => _x( 'Poster', 'Video preview/fallback image.', 'fl-builder' )
					),
					'autoplay'       => array(
						'type'          => 'select',
						'label'         => __('Auto Play', 'fl-builder'),
						'default'       => '0',
						'options'       => array(
							'0'             => __('No', 'fl-builder'),
							'1'             => __('Yes', 'fl-builder')
						),
						'preview'       => array(
							'type'          => 'none'
						)
					),
					'loop'           => array(
						'type'          => 'select',
						'label'         => __('Loop', 'fl-builder'),
						'default'       => '0',
						'options'       => array(
							'0'             => __('No', 'fl-builder'),
							'1'             => __('Yes', 'fl-builder')
						),
						'preview'       => array(
							'type'          => 'none'
						)
					),
					'embed_code'     => array(
						'type'          => 'textarea',
						'label'         => __( 'Video Embed Code', 'fl-builder' ),
						'rows'          => '6'
					)
                    
                )
                ),
               
        )
    )
));