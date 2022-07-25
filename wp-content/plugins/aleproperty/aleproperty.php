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
}

register_activation_hook('__FILE__', [$aleproperty, 'activation']);
register_deactivation_hook('__FILE__', [$aleproperty, 'deactivation']);