<?php
/**
 * Plugin Name:       Functions
 * Plugin URI:        https://soymipagina.com
 * Description:       Funciones
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Soy Mi Pagina
 * Author URI:        https://soymipagina.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * */
function replace_content($content)
{
$content = str_replace('##Replace Me##', '##With Something Else##',$content);
return $content;
}
add_filter('the_content','replace_content');


/*Redirect to home when logged out*/
add_action('wp_logout','ps_redirect_after_logout');
function ps_redirect_after_logout(){
         wp_redirect( '/' );
         exit();
}

/*Remove Zoom effecto on iOS devices*/
function zoom_effect_remover() {
    ?>
        <script>
            jQuery(function($) {
                $("[name='viewport']").attr('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');
            });
        </script>
    <?php
    }
    
    add_action( 'wp_head', 'zoom_effect_remover' );
    add_action( 'admin_head', 'zoom_effect_remover' );

