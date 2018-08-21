<?php
/*
Widget Name: JLB Child Gallery
Description: This is for the Child Gallery module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Child_Gallery extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-child-gallery-template';
  }
  function get_template_dir($instance) {
    return 'jlb-child-gallery-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-child-gallery-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-child-gallery.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-child-gallery-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-child-gallery.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-child-gallery',
      // The name of the widget for display purposes.
      __('JLB Child Gallery', 'jlb-child-gallery-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Child Gallery', 'jlb-child-gallery-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'gallery_repeater' => array(
          'type' => 'repeater',
          'label' => __('Gallery Repeaters', 'widget-form-fields-text-domain'),
          'item_name' => __('Gallery Repeater', 'widget-form-fields-text-domain'),
          'fields' => array(
            'title' => array(
              'type' => 'text',
              'label' => __('Title', 'widget-form-fields-text-domain')
            ),
            'gallery_image_one' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'gallery_image_two' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'gallery_image_three' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'gallery_image_four' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'gallery_image_five' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
            ),
            'gallery_image_six' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
            ),
            'gallery_image_seven' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
            )
          )
        )
    );
  }
}
siteorigin_widget_register('jlb-child-gallery', __FILE__, 'JLB_Child_Gallery');