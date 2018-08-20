<?php
/*
Widget Name: JLB Before After
Description: This is for the Before After module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Before_After extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-before-after-template';
  }
  function get_template_dir($instance) {
    return 'jlb-before-after-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-before-after-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-before-after.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-before-after-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-before-after.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-before-after',
      // The name of the widget for display purposes.
      __('JLB Before After', 'jlb-before-after-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Before After', 'jlb-before-after-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'slider_repeater' => array(
          'type' => 'repeater',
          'label' => __('Slider Repeaters', 'widget-form-fields-text-domain'),
          'item_name' => __('Slider Repeater', 'widget-form-fields-text-domain'),
          'fields' => array(
            'image_before' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'image_after' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'title' => array(
              'type' => 'text',
              'label' => __('Title', 'widget-form-fields-text-domain')
            ),
            'body' => array(
              'type' => 'tinymce',
              'label' => __('Body', 'widget-form-fields-text-domain'),
              'default_editor' => 'tmce'
            )
          )
        )
    );
  }
}
siteorigin_widget_register('jlb-before-after', __FILE__, 'JLB_Before_After');