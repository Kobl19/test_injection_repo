<?php
   // правильный способ подключить стили и скрипты
    // add_filter('show_admin_bar', '__return_false');

    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'wp_resource_hints', 2);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script',);
    remove_action('wp_print_styles', 'print_emoji_styles',);
    remove_action('admin_print_styles', 'print_emoji_styles',);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    add_action( 'wp_enqueue_scripts', 'theme_style');
    function theme_style() {
        $version = '0.0.0.0';
        wp_dequeue_style('wp-block-library');
        wp_enqueue_style('main-style', get_template_directory_uri().'/assets/css/style.css', [], $version);
        wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/app.min.js', [], $version, true);
    }
?>