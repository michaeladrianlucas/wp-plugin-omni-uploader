<?php
/**
*Plugin Name: Omni Uploader
*Description: STMP Contact form with mulitple file uploads
*Version:     1.0
*Author:      omni Creative Co.
*Author URI:  http://omnicreativecompany.com
*License:     GPL2 etc
*/
 /**Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

add_action( 'wp_enqueue_scripts', 'omni_creative_assets' );

function omni_creative_assets() {

  wp_enqueue_style( 'file-uploader', plugin_dir_url( __FILE__ ) . 'style.css' );
	  wp_enqueue_script( 'attachment-upload', plugin_dir_url( __FILE__ ) . '/script.js', array( 'jquery' ), '1.0', true  );
}

function MailForm(){
    include 'form.php';
}

function omni_contact()
{
    return MailForm();
}

add_shortcode( 'omnicontact', 'omni_contact' );

?>
