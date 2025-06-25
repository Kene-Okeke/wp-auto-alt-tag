<?php
/**
 * Plugin Name: Auto Add ALT Tags to Images
 * Description: Automatically adds ALT text to images missing it using their title.
 * Version: 1.0
 * Author: McDavid Okeke
 */

add_filter('wp_get_attachment_image_attributes', function($attr, $attachment) {
    if (empty($attr['alt'])) {
        $attr['alt'] = get_the_title($attachment->ID);
    }
    return $attr;
}, 10, 2);
