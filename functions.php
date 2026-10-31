<?php

/**
 * Register support for Gutenberg wide images in your theme
 */
function blackals_theme_setup()
{
    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Black', 'blackalsatian'),
            'slug' => 'black',
            'color' => '#111827',
        ),
        array(
            'name' => __('White', 'blackalsatian'),
            'slug' => 'white',
            'color' => '#ffffff',
        ),
        array(
            'name' => __('Yellow', 'blackalsatian'),
            'slug' => 'yellow',
            'color' => '#f5df4d',
        ),
        array(
            'name' => __('Red', 'blackalsatian'),
            'slug' => 'red',
            'color' => '#e54b42',
        ),
        array(
            'name' => __('Blue', 'blackalsatian'),
            'slug' => 'blue',
            'color' => '#0060b4',
        ),
    ));
    add_theme_support('disable-custom-colors');
    add_theme_support('menus');
    add_editor_style('style-editor.css');
    // add_theme_support('featured_xs');
    add_theme_support('featured_sm');
    add_theme_support('featured_md');
    add_theme_support('featured_lg');
    // add_theme_support('featured_fb');
    add_theme_support('featured_xl');
    add_theme_support('full');
    add_image_size('ratio', 1200, 630, true);
    // add_image_size('featured_xs', 350, 175, true);
    add_image_size('featured_sm', 450, 225, true);
    add_image_size('featured_md', 768, 384, true);
    add_image_size('featured_lg', 1200, 630, true);
    // add_image_size('featured_fb', 1200, 630, true);
    add_image_size('featured_xl', 1920, 1080, true);
    add_image_size('full');
    the_post_thumbnail('thumbnail'); // Thumbnail (default 150px x 150px max)
    the_post_thumbnail('medium'); // Medium resolution (default 300px x 300px max)
    the_post_thumbnail('medium_large'); // Medium-large resolution (default 768px x no height limit max)
    the_post_thumbnail('large'); // Large resolution (default 1024px x 1024px max)
    the_post_thumbnail('full'); // Original image resolution (unmodified)
    // the_post_thumbnail(array( 400, 400 )); Other resolutions (height, width)
}
  add_action('after_setup_theme', 'blackals_theme_setup');

  // completely disable image size threshold
add_filter('big_image_size_threshold', '__return_false');

//Add menus
function blackals_extra_menus()
{
    register_nav_menus(
        array(
        'primary-menu' => __('Primary Menu'),
        'services-menu' => __('Services Menu'),
        'footer-menu' => __('Footer Menu'),
      )
    );
}
  add_action('init', 'blackals_extra_menus');
