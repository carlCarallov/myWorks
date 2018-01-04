<?php
/*
Plugin Name: My Gallery
Plugin URI: webdev.ru
Description: этот плагин поможет разместить превью статей в формате таблицы
Version: 1.0
Author: Vladimir Pavlov
Author URI: webdev.ru
*/

/*  Copyright 2017  Vladimir Pavlov  (email:chet.solomon.key@yandex.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_action('wp_ajax_table', 'show_table');
add_action('wp_ajax_nopriv_table', 'show_table');


add_action('wp_ajax_inf', 'show_inf');
add_action('wp_ajax_nopriv_inf', 'show_inf');
function show_inf(){
    $secondAddress = get_template_directory_uri().'/table.json';
    $file_title = file_get_contents($secondAddress, FILE_USE_INCLUDE_PATH);
    echo $file_title;
    wp_die();
}
function show_table(){
    $address = get_template_directory_uri().'/table.json';
    $file = file_get_contents($address, FILE_USE_INCLUDE_PATH);
    echo $file;
    wp_die();
}

add_action('wp_enqueue_scripts','my_assets');

function my_assets(){
   wp_enqueue_script('myGallery', plugins_url('myGallery.js',__FILE__), array('jquery'));
    
    wp_localize_script('myGallery','myPlugin', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'img_addr' => get_template_directory_uri()
    ));
}
?>