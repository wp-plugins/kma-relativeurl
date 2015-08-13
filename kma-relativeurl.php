<?php
/*
Plugin Name: kma-relativeurl
Plugin URI: https://github.com/Gonzalo2310/kma-relativeurl/archive/master.zip
Description: Converts relative URL to absolute URL. Complement for migrations
Version: 1.0.0
Author: desarrollo@kmadisseny.es
Author URI: www.kmadisseny.es
License: GPLv2
*/

/* 
Copyright (C) 2015 desarrollo@kmadisseny.es

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

function kma_url_convert($atts){
   extract(shortcode_atts(array(
      'url' => '/',
   ), $atts));

   $return_string=  get_site_url().$url;
   return $return_string;
}
add_shortcode('kmaurl', 'kma_url_convert');

add_action('wp_head', 'variablejs');

function variablejs(){ 
?>
<script>
    var kmaurl="<?php echo get_site_url(); ?>";
</script>
<?php
} 

add_action('init', 'kma_relativeurl_button');
function kma_relativeurl_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'kma_relativeurl_add_plugin');
     add_filter('mce_buttons', 'kma_relativeurl_register_button');
   }
}
function kma_relativeurl_register_button($buttons) {
   array_push($buttons, "kma_relativeurl");
   return $buttons;
}

function kma_relativeurl_add_plugin($plugin_array) {
   $plugin_array['kma_relativeurl'] = plugins_url('button/shortcode.js',__FILE__);
   return $plugin_array;
}