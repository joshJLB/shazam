<?php
/*
Widget Name: JLB Call To Action
Description: This is for the Call To Action module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Call_To_Action extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-call-to-action-template';
  }
  function get_template_dir($instance) {
    return 'jlb-call-to-action-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-call-to-action-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-call-to-action.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-call-to-action-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-call-to-action.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-call-to-action',
      // The name of the widget for display purposes.
      __('JLB Call To Action', 'jlb-call-to-action-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Call To Action', 'jlb-call-to-action-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
      'image' => array(
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
    );
  }
}
siteorigin_widget_register('jlb-call-to-action', __FILE__, 'JLB_Call_To_Action');