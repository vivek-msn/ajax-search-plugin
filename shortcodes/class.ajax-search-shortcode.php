<?php

if( ! class_exists('Ajaxsearchshortcode')){
    class Ajaxsearchshortcode{
        public function __construct(){
            add_shortcode( 'ajaxsearch', array( $this, 'add_shortcode' ) );
        }

        public function addShortcode(){

         

            ob_start();
            require_once MV_TRANSLATIONS_PATH . 'views/ajax-search_shortcode.php' ;
            return ob_get_clean();
        }
    }
}