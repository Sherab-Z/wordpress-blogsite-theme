<?php 

  function sherabdev_register_styles() {

  wp_enqueue_style('sherabdev-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'sherabdev_register_styles');

?>