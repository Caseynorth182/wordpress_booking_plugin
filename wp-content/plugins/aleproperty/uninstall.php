<?php

$property = get_posts([
    'post_type' => ['property', 'agent'],
    'numberposts' => -1
]);

foreach ($property as $prop) {
    wp_delete_post($prop->ID, true);
}