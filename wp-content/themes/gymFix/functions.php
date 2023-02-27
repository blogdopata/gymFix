

<?php

function gymfitness_menus(){
    /* Se pueen agregar mas menus solo separar con  comas (,) */ 
    register_nav_menus( array(
        'menu_principal' => __('Menu Principal', 'gymfitness' )

    ) );

}

 
/* add_action:  agrega codigo
   add_filter: modifica la información
*/

/*  INIT se le conoce como un hook  ( este arranca el wp) */

add_action('init', 'gymfitness_menus');


/*  Para agregar una hoja de EStilos */


function  gymfitness_scripts_styles(){

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0' ) ;


}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');