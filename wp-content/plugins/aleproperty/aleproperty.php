<?php
/* 
* @package Aleproperty 
* @author Alex Baranov  
* @copyright 2022 Alex Baranov
* @license GPL-2.0-or-later 
* 
* @wordpress-plugin 
* Plugin Name: Aleproperty-Alex_Baranov
* Description: Prints "Booking wp pluggin". 
* Version: 0.0.1 
* Author: Alex Baranov 
* Text Domain: aleproperty 
* License: GPL v2 or later 
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt  
*/

if (!defined('ABSPATH')) {
    die;
}

class aleproperty
{
    public  function register()
    {
        add_action('init', [$this, 'custom_post_type']);
    }

    public function custom_post_type()
    {
        register_post_type('property', [
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'properties '],
            'label' => 'Property',
            'supports' => ['title', 'editor', 'thumbnail']
        ]);

        register_post_type('agent', [
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'agents '],
            'label' => 'Agents',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true
        ]);
    }

    public static function activation()
    {
        flush_rewrite_rules();
    }
    public static function deactivation()
    {
        flush_rewrite_rules();
    }
}

if (class_exists('aleproperty')) {
    $aleproperty = new aleproperty();
    $aleproperty->register();
}

register_activation_hook('__FILE__', [$aleproperty, 'activation']);
register_deactivation_hook('__FILE__', [$aleproperty, 'deactivation']);