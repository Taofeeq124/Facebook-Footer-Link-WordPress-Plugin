<?php

// Add Scripts

function ffl_add_footer($content){

    // init options Global

    global $ffl_options ;
    
    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content"></div>';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a style="color:'.$ffl_options['link_color'].'" target="_blank" 
    href="'.$ffl_options['facebook_url'].'">Facebook</a>'  ;
    $footer_output .= '</div>';

    if($ffl_options['show_in_feed']){
        if(is_single() || is_home() && $ffl_options['enable']){
            return $content . $footer_output;
        }
    } else{
        if(is_single() && $ffl_options['enable']){
            return $content . $footer_output;
        }
    }

    
    return $content;
}

add_filter('the_content', 'ffl_add_footer');
